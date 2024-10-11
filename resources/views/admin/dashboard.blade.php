{{-- <h1>Welcome to Admin Dashboard</h1>
    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form> --}}



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <style>
            body {
                background-color: #f8f9fa;
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }
            .navbar {
                background-color: #e9ecef;
                padding: 10px 20px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .navbar a {
                text-decoration: none;
                color: #007bff;
                padding: 10px 15px;
                display: inline-block;
                font-weight: bold;
            }
            .navbar a:hover {
                background-color: #007bff;
                color: #ffffff;
                border-radius: 4px;
            }
            .navbar .brand {
                font-size: 24px;
                font-weight: bold;
            }
            .navbar .nav-items a {
                margin-left: 10px;
            }
            .navbar .nav-items form {
                display: inline-block;
                margin-left: 10px;
            }
            .container {
                margin: 20px auto;
                max-width: 1200px;
                padding: 0 15px;
                flex-grow: 1;
            }
            .dashboard-section {
                padding: 20px;
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .btn-custom {
                background-color: #007bff;
                color: #ffffff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
            }
            .btn-custom:hover {
                background-color: #0056b3;
            }
            footer {
                background-color: #e9ecef;
                text-align: center;
                padding: 10px;
                margin-top: auto;
            }
        </style>
    </head>
    <body>
        <nav class="navbar">
            <a href="#" class="brand">Dashboard</a>
            <div class="nav-items">
                <a href="{{ url('/admin/services') }}">Layanan</a>
                <a href="{{ url('/admin/facilities') }}">Fasilitas</a>
                <a href="{{ url('/admin/instansi') }}">Instansi</a>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-custom">Logout</button>
                </form>
            </div>
        </nav>
        <div class="container">
            <div class="dashboard-section">
                <h1>Welcome to Admin Dashboard</h1>
                <p>You are logged in as an admin. Use the navigation bar to manage services, facilities, users, and more.</p>
            </div>
        </div>
        <footer>
            <p>&copy; 2024 MPP Bangkalan Admin Dashboard</p>
        </footer>
    </body>
    </html>
    