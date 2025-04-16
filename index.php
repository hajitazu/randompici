<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil input dari textarea dan memisahkan kata-kata berdasarkan baris baru
    $words = preg_split('/\r\n|\r|\n/', trim($_POST['words']));
    $randomWord = $words[array_rand($words)];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Kata Acak</title>
</head>
<body>
    <h1>Pilih Kata Acak</h1>
    <form method="post">
        <label for="words">Masukkan kata-kata (pisahkan dengan baris baru):</label><br>
        <textarea id="words" name="words" rows="10" required></textarea><br><br>
        <input type="submit" value="Pilih Kata Acak">
    </form>

    <?php if (isset($randomWord)): ?>
        <h2>Kata Acak: <?php echo htmlspecialchars($randomWord); ?></h2>
    <?php endif; ?>
</body>
</html>
