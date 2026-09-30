<?php 
session_start();
require_once 'db.php';

// บันทึกข้อมูลใหม่
if (isset($_POST['add_service'])) {
    $eyebrow = $_POST['eyebrow']; // แก้ไขชื่อ Key
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image_url = $_POST['image_url'];
    $link_url = $_POST['link_url'];

    $stmt = $conn->prepare("INSERT INTO services (eyebrow, title, description, image_url, link_url) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $eyebrow, $title, $description, $image_url, $link_url);
    $stmt->execute();
    header("Location: manage_services.php");
    exit;
}

// ลบข้อมูล
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $conn->prepare("DELETE FROM services WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: manage_services.php");
    exit;
}

// ดึงข้อมูลทั้งหมด
$services = $conn->query("SELECT * FROM services ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จัดการเนื้อหาการ์ด</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background-color: #1e293b; }
        .sidebar a { color: #94a3b8; text-decoration: none; padding: 12px 20px; display: block; }
        .sidebar a:hover, .sidebar a.active { background-color: #334155; color: #fff; border-radius: 6px; }
        .card-custom { border: none; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-3 col-lg-2 sidebar p-3">
                <a href="../index.php" class="text-info text-center text-decoration-none d-block mb-4"><h4 class="mb-0"><i class="bi bi-shield-lock"></i> Admin Panel</h4></a>
                <a href="dashboard.php"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
                <a href="manage_users.php"><i class="bi bi-people me-2"></i> จัดการผู้ใช้งาน</a>
                <a href="manage_products.php"><i class="bi bi-box-seam me-2"></i> รายการสินค้า</a>
                <a href="manage_services.php" class="active"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a href="Settings.php"><i class="bi bi-gear me-2"></i> ตั้งค่าระบบ</a>
            </aside>
            <main class="col-md-9 col-lg-10 p-4">
            <div class="d-flex justify-content-between align-items-center pb-3 mb-4 border-bottom">
                <h3>จัดการสินค้า</h3>
                <a class="btn btn-outline-danger btn-sm" href="logout.php"><i class="bi bi-box-arrow-right"></i> ออกจากระบบ</a>
            </div>
    <div class="card card-custom p-4">
        <!-- แก้คลาสเป็น mb-4 -->
        <h1 class="mb-4">จัดการเนื้อหาการ์ด (หน้าแรก)</h1>

        <!-- แก้คลาสเป็น border-bottom -->
        <form method="POST" class="row g-3 mb-5 border-bottom pb-4">
            <div class="col-md-3">
                <input type="text" name="eyebrow" class="form-control" placeholder="ข้อความกำกับ (Eyebrow)" value="เริ่มต้นใช้งาน">
            </div>
            <div class="col-md-4">
                <input type="text" name="title" class="form-control" placeholder="หัวข้อ (Title)" required>
            </div>
            <div class="col-md-5">
                <input type="text" name="link_url" class="form-control" placeholder="ลิงก์กดไปต่อ (เช่น html2/page-01.html)" required>
            </div>
            <div class="col-md-6">
                <input type="text" name="image_url" class="form-control" placeholder="URL รูปภาพ (หรือใช้รูป Unsplash เดิม)" value="https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&w=900&q=80" required>
            </div>
            <div class="col-md-6">
                <input type="text" name="description" class="form-control" placeholder="คำอธิบายสั้นๆ" required>
            </div>
            <div class="col-12">
                <button type="submit" name="add_service" class="btn btn-primary">+ เพิ่มการ์ดใหม่</button>
            </div>
        </form> 

        <table class="table table-bordered table-striped align-middle">
            <thead>
                <tr>
                    <th>รูปภาพ</th>
                    <th>หัวข้อ / รายละเอียด</th>
                    <th>ลิงก์ปลายทาง</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($services && $services->num_rows > 0): ?>
                    <?php while($row = $services->fetch_assoc()): ?>
                    <tr>
                        <td><img src="<?= htmlspecialchars($row['image_url']) ?>" width="80" style="border-radius: 4px;"></td>
                        <td>
                            <small class="text-muted"><?= htmlspecialchars($row['eyebrow']) ?></small>
                            <h6 class="mb-1"><?= htmlspecialchars($row['title']) ?></h6>
                            <small><?= htmlspecialchars($row['description']) ?></small>
                        </td>
                        <td><code><?= htmlspecialchars($row['link_url']) ?></code></td>
                        <td>
                            <a href="?delete=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('ยืนยันลบรายการนี้?')">ลบ</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted">ยังไม่มีข้อมูลบริการในระบบ</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
            </main>
        </div>
    </div>
</body>
</html>