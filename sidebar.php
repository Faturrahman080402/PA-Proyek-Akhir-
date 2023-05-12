<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 330px;
            height: 100%;
            background-color: #333333;
            padding: 20px;
            box-sizing: border-box;
            color: #ffffff;
            transition: all 0.3s ease-in-out;
            overflow-y: auto;
            /* tambahkan overflow-y untuk membuat scroll jika content terlalu panjang */
        }

        .sidebar:hover {
            width: 350px;
        }

        .sidebar h3 {
            font-size: 24px;
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
            color: #ffd700;
        }

        .sidebar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .sidebar li {
            padding: 10px 0;
            transition: all 0.2s ease-in-out;
            border-bottom: 1px solid #ffffff;
        }

        .sidebar li:last-child {
            border-bottom: none;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            padding-left: 10px;
            /* tambahkan padding kiri untuk memberi jarak dengan garis bawah */
        }

        .sidebar a:hover {
            color: #ffd700;
        }

        .main {
            margin-left: 380px;
            padding: 20px;
            box-sizing: border-box;
            background-color: #ffffff;
            height: 100%;
            transition: all 0.3s ease-in-out;
        }

        .main.shifted {
            margin-left: 100px;
            width: calc(100% - 100px);
        }

        .main h1 {
            margin-top: 0;
            text-align: center;
        }

        .main p {
            line-height: 1.5;
            font-size: 16px;
            margin-bottom: 30px;
        }

        /* tambahkan style untuk link di Page Content */
        .w3-container a {
            color: #333333;
        }

        /* tambahkan style untuk heading di Page Content */
        .w3-container h2 {
            color: #333333;
        }
    </style>
    <script>
        const sidebar = document.querySelector('.sidebar');
        const main = document.querySelector('.main');
        sidebar.addEventListener('click', () => {
            main.classList.toggle('shifted');
        });
        sidebar.addEventListener('mouseover', () => {
            main.classList.add('shifted');
        });

        sidebar.addEventListener('mouseleave', () => {
            main.classList.remove('shifted');
        });
    </script>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h3>Menu</h3>
        <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
        </ul>
    </div>

    <!-- Page Content -->
    <div class="main">

        <div class="w3-container w3-teal">
            <h1>My Page</h1>
        </div>

        <img src="img_car.jpg" alt="Car" style="width:100%">

        <div class="w3-container">
            <h2>Sidebar Navigation Example</h2>
            <p>The sidebar with is set with "style="width:25%".</p>
            <p>The left margin of the page content is set to the same value.</p>
        </div>

    </div>

</body>

</html>