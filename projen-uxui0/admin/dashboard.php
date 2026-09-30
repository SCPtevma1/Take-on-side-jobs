<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard (Mockup UI)</title>
    <!-- โหลด Bootstrap 5 CSS เพื่อความสวยงามและรองรับมือถือ -->
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
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 sidebar p-3">
            <a href="../index.php" class="text-info text-center text-decoration-none d-block mb-4"><h4 class="mb-0"><i class="bi bi-shield-lock"></i> Admin Panel</h4></a>
            <a href="dashboard.php" class="active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
            <a href="manage_users.php"><i class="bi bi-people me-2"></i> จัดการผู้ใช้งาน</a>
            <a href="manage_products.php"><i class="bi bi-box-seam me-2"></i> รายการสินค้า</a>
            <a href="manage_services.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
            <a href="Settings.php"><i class="bi bi-gear me-2"></i> ตั้งค่าระบบ</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 p-4">
            <!-- Header Bar -->
            <div class="d-flex justify-content-between align-items-center pb-3 mb-4 border-bottom">
                <h3 class="/">ภาพรวมระบบ (Dashboard)</h3>
                <div>
                    <span class="me-3">ยินดีต้อนรับ, <strong>Admin (Demo)</strong></span>
                    <a class="btn btn-outline-danger btn-sm" href="login.php"><i class="bi bi-box-arrow-right"></i> ออกจากระบบ</a>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row g-3 mb-4">
                <div class="col-md-4">
                    <div class="card card-custom p-3 bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6>ผู้ใช้งานทั้งหมด</h6>
                                <h2>120 คน</h2>
                            </div>
                            <i class="bi bi-people fs-1"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom p-3 bg-success text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6>รายการสั่งซื้อ</h6>
                                <h2>45 รายการ</h2>
                            </div>
                            <i class="bi bi-cart-check fs-1"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom p-3 bg-warning text-dark">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6>รอการอนุมัติ</h6>
                                <h2>5 รายการ</h2>
                            </div>
                            <i class="bi bi-clock-history fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table UI (Mockup Data) -->
            <div class="card card-custom p-3">
                <h5 class="card-title mb-3">รายชื่อผู้ใช้งานล่าสุด</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Username / Email</th>
                                <th>สถานะ</th>
                                <th>วันที่สมัคร</th>
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>v890x0@gmail.com</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>2026-09-13</td>
                                <td>
                                    <button class="btn btn-sm btn-warning me-1"><i class="bi bi-pencil"></i> แก้ไข</button>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> ลบ</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>user_demo@gmail.com</td>
                                <td><span class="badge bg-secondary">Pending</span></td>
                                <td>2026-09-12</td>
                                <td>
                                    <button class="btn btn-sm btn-warning me-1"><i class="bi bi-pencil"></i> แก้ไข</button>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> ลบ</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>