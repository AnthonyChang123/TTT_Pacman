<?php
session_start();
$db = require __DIR__ . '/Database.php';

if (empty($_SESSION['user_id'])) {
    header("Location: LoginPage.php");
    exit;
}

$userId = (int) $_SESSION['user_id'];

$sql = "
    SELECT a.*, u.profile_image, u.preferred_pay
    FROM accounts a
    LEFT JOIN userprofile u ON u.user_id = a.id
    WHERE a.id = ?
";

$stmt = $db->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$profile = $stmt->get_result()->fetch_assoc();
$stmt->close();

$vImgSrc = $profile['profile_image'] ?: 'Images/ProfileIcon.png';

include("header.php");
?>

<main>
    <div class="container-card">
        <h2>Edit Profile</h2>

        <form method="POST" action="Profile_Controller.php" enctype="multipart/form-data">

            <div class="avatar-uploader">
                <input type="file" id="avatarInput" name="profileImage" accept="image/*" style="display:none;">
                <label for="avatarInput" class="avatar">
                    <img id="avatarPreview" src="<?= htmlspecialchars($vImgSrc) ?>">
                </label>
                <small>Click to change picture</small>
            </div>

            <label>First Name</label>
            <input type="text" name="first_name" value="<?= htmlspecialchars($profile['first_name']) ?>">

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?= htmlspecialchars($profile['last_name']) ?>">

            <label>School</label>
            <input type="text" name="school_name" value="<?= htmlspecialchars($profile['school_name']) ?>">

            <label>Major</label>
            <input type="text" name="major" value="<?= htmlspecialchars($profile['major']) ?>">

            <label>Location (City, State)</label>
            <input type="text" name="city_state" value="<?= htmlspecialchars($profile['city_state']) ?>">

            <label>Preferred Payment</label>
            <select name="preferred_pay">
                <?php foreach (['Venmo','PayPal','CashApp','Zelle','Cash'] as $opt): ?>
                <option value="<?= $opt ?>" <?= ($profile['preferred_pay']==$opt?'selected':'') ?>>
                    <?= $opt ?>
                </option>
                <?php endforeach; ?>
            </select>

            <button type="submit" name="update_profile" class="button">Save Changes</button>
        </form>
    </div>
</main>

<script>
document.getElementById("avatarInput").addEventListener("change", function() {
    const file = this.files[0];
    if (!file) return;
    document.getElementById("avatarPreview").src = URL.createObjectURL(file);
});
</script>

<?php include("footer.php"); ?>
