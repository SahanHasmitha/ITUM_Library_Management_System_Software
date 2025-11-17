<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>ITUM Library Management System</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="topbar">
  <div class="brand">ITUM Library Management System</div>
  <a href="logout.php" class="logout-btn">Logout</a>
</div>

<div class="sidebar">
  <a href="dashboard.php" class="nav-item"><i class="fa-solid fa-table-cells"></i>Dashboard</a>
  <a href="book_management.php" class="nav-item"><i class="fa-solid fa-book"></i>Book Management</a>
  <a href="issue_books.php" class="nav-item"><i class="fa-solid fa-paper-plane"></i>Issue Books</a>
  <a href="#" class="nav-item active"><i class="fa-solid fa-rotate-left"></i>Return Books</a>
  <a href="member.php" class="nav-item"><i class="fa-solid fa-users"></i>Members</a>
  <a href="report.php" class="nav-item"><i class="fa-solid fa-chart-simple"></i>Reports</a>
  <a href="fine_management.php" class="nav-item"><i class="fa-solid fa-money-bill-wave"></i>Fine Management</a>

  <div class="bottom-profile">
      <i class="fa-solid fa-user"></i>
  </div>
</div>

<main class="main">
  <div class="form_container issue" style="background: none;">
    <div class="section2 issue_books">
      <form action="" method="post">
        <h2>Return Book Form</h2>

        <div class="input_box">
          <label>Registration No</label>
          <input type="text" name="reg_no">
        </div>

        <div class="input_box">
          <label>Student Name</label>
          <input type="text" name="student_name">
        </div>

        <div class="flex">
          <div class="input_box">
            <label>Book ID</label>
            <input type="text" name="book_id">
          </div>
          <div class="input_box">
            <label>Book Title</label>
            <input type="text" name="book_title">
          </div>
        </div>

        <div class="flex">
          <div class="input_box">
            <label>Issue Date</label>
            <input type="date" name="issue_date">
          </div>
          <div class="input_box">
            <label>Return Date</label>
            <input type="date" name="return_date">
          </div>
        </div>

        <button type="submit" name="return">Return</button>
      </form>
    </div>
  </div>
</main>


</body>
</html>
