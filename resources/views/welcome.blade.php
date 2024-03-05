<!DOCTYPE html>
<html>
<head>
  <title>Navbar Example</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    nav {
      background-color: #dcdcdc;
      height: 70px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
    }

    .logo {
      color: #fff;
      font-size: 24px;
      font-weight: bold;
      text-decoration: none;
    }

    .links {
      display: flex;
      align-items: center;
      flex-grow: 1;
      justify-content: center;
    }

    .link-item {
      position: relative;
      margin-right: 20px;
    }

    .link-item a {
      color: #000000;
      text-decoration: none;
      font-weight: bold;
      padding: 10px;
    }

    .link-item:hover a {
      /* background-color: #555; */
      border-radius: 5px;
      color: #8e8d8d;
    }

    .panel {
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #fff;
      padding: 10px;
      display: none;
      width: 200px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      z-index: 1;
      transform: translateY(10px);
      opacity: 0;
      transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .link-item:hover .panel {
      display: block;
      transform: translateY(0);
      opacity: 1;
    }

    .panel-item {
      margin-bottom: 5px;
    }

    .panel-item a {
      display: block;
      color: #000000;
      text-decoration: none;
      padding: 5px;
    }

    .login-button {
      background-color: #ff5500;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <nav>
    <a href="#" class="logo">
      <img src="{{ asset('assets/images/logo/logo.png')}}" width="200px" height="70px" alt="Koverae Logo">
    </a>
    <div class="links">
      <div class="link-item">
        <a href="#">Dashboard</a>
      </div>
      <div class="link-item">
        <a href="#">Menu</a>
        <div class="panel">
          <div class="panel-item"><a href="#">Item 1</a></div>
          <div class="panel-item"><a href="#">Item 2</a></div>
          <div class="panel-item"><a href="#">Item 3</a></div>
        </div>
      </div>
      <div class="link-item">
        <a href="#">Locations</a>
      </div>
      <div class="link-item">
        <a href="#">About</a>
      </div>
    </div>
    <button class="login-button">Login</button>
  </nav>
</body>
</html>
