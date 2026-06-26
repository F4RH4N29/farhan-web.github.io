<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>


    <style>
       
        body,HTML {
           
          background-image: url('https://th.bing.com/th/id/OIP.qoWeACz44jiHcZWxbh2rxgHaD4?w=284&h=180&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3');
            
          background-repeat: no-repeat;
          background-size: cover;
          Width: 100%;
            Height: 100%;
            Position: fixed;
            
          font-family: Arial, sans-serif;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

       
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px; /* Jarak antara tulisan REGISTER/LOGIN dengan card */
        }

       
        .form-title {
            font-weight: bold;
            font-size: 28px;
            color: #000000;
            letter-spacing: 1px;
        }

      
        .card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: flex;
            flex-direction: column;
            gap: 15px; /* Jarak antar input field */
        }

       
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #b3b3b3;
            border-radius: 4px;
            margin-bottom: 10px;
            box-sizing: border-box;
            font-size: 14px;
            color: #333333;
        }

        .btn-register {
            background-color: #4caf50;
            color: white;
            border: none;
            margin-top: 10px;
            padding: 12px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100px; /* Menyesuaikan lebar tombol seperti di gambar */
            align-self: flex-start; /* Tombol rata kiri di dalam card */
            transition: background-color 0.2s;
        }

        .btn-register:hover {
            background-color: #43a047;
        }
    </style>
</head>


<body>
    <div class="form-container">
        <h1 class="form-title">LOGIN</h1>
        <div class="card">
            <form action="register.php" method="POST">
                <div class="input-group">
                    <input type="text" name="NAMA" placeholder="NAMA" required>
                </div>
                <div class="input-group">
                    <input type="email" name="EMAIL" placeholder="EMAIL" required>
                </div>
                <div class="input-group">
                    <input type="password" name="PASSWORD" placeholder="PASSWORD" required>
                </div>
                <button type="submit" class="btn-register">Login</button>
            </form>
        </div>
</body>
</html>                                                