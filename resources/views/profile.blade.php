<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Tanda Pengenal</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-card {
            width: 300px;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
            border: 1px solid #ddd;
            overflow: hidden;
        }
        .profile-card .photo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 20px auto;
            border: 3px solid #007bff;
            overflow: hidden;
        }
        .profile-card .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .profile-card h1 {
            margin: 10px 0;
            font-size: 22px;
            color: #333;
        }
        .profile-card .info {
            margin-top: 10px;
            font-size: 16px;
            color: #555;
            text-align: left;
        }
        .profile-card .info p {
            margin: 5px 0;
        }
        .profile-card .info p strong {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <div class="photo">
            <img src="https://via.placeholder.com/80" alt="Profile Picture">
        </div>
        <h1>M. Reza Kurniawan</h1>
        <div class="info">
            <p><strong>Nama:</strong> M. Reza Kurniawan</p>
            <p><strong>Kelas:</strong> C</p>
            <p><strong>NPM:</strong> 2257051017</p>
        </div>
    </div>
</body>
</html>
