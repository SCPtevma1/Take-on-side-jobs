<?php 
  require_once 'admin/db.php';
  $query = "SELECT * FROM services ORDER BY id DESC";
  $result = $conn->query($query);
?>
<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>หน้าแรก</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
  <header class="site-header">
    <a class="brand" href="/index.php">เว็บไซต์ของฉัน</a>
    <nav aria-label="เมนูหลัก">
      <a href="/index.php">หน้าแรก</a>
      <a href="hok/pro.html">โปรโมชั่น / แพ็คเกจ</a>
      <a href="/html/ass.html">บริการเสริม</a>
    </nav>
  </header>
  <main class="hero">
    <h1>ออกแบบUXUIหน้าเว็ปพร้อมใช้งาน</h1>
  </main>

<div id="demo-container" class="card-container">
                <a href="demo-container/student.html" class="card-item group">
                    <div class="card-icon bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white">
                       <i class="fa-solid fa-user-graduate" style="color: rgb(81, 35, 217);" aria-hidden="true"></i>
                    </div>
                    <p class="card-title">สำหรับนักศึกษา</p>
                    <p class="card-subtitle">ส่วนลดคอร์สเรียนและเครื่องมือสำหรับวัยเรียน</p>
                    <span class ="card-arrow">
                        ดูรายละเอียด <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </a> 
                <a href="demo-container/hospital.html" class="card-item group">
                    <div class="card-icon bg-emerald-50 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white">
                        <i class="fa-solid fa-hospital" style="color: rgb(81, 35, 217);" aria-hidden="true"></i>
                    </div>
                    <p class="card-title">โรงพยาบาล</p>
                    <p class="card-subtitle">โซลูชันด้านสาธารณสุขและการดูแลสุขภาพ</p>
                    <span class="card-arrow text-emerald-600">
                        ดูรายละเอียด <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </a>

                
                <a href="demo-container/small-business.html" class="card-item group">
                    <div class="card-icon bg-amber-50 text-amber-600 group-hover:bg-amber-600 group-hover:text-white">
                        <i class="fa-solid fa-store" style="color: rgb(81, 35, 217);" aria-hidden="true"></i>
                    </div>
                    <p class="card-title">สำหรับธุรกิจเล็ก</p>
                    <p class="card-subtitle">แพ็กเกจเริ่มต้นประหยัด คุ้มค่าสำหรับ SME</p>
                    <span class="card-arrow text-amber-600">
                        ดูรายละเอียด <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </a>

                <a href="demo-container/enterprise.html" class="card-item group">
                    <div class="card-icon bg-indigo-50 text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white">
                        <i class="fa-solid fa-building" style="color: rgb(81, 35, 217);" aria-hidden="true"></i>
                    </div>
                    <p class="card-title">สำหรับธุรกิจใหญ่</p>
                    <p class="card-subtitle">ระบบระดับองค์กร รองรับการขยายตัวสูง</p>
                    <span class="card-arrow text-indigo-600">
                        ดูรายละเอียด <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </a>
                
                <a href="demo-container/organization.html" class="card-item group">
                    <div class="card-icon bg-indigo-50 text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white">
                    <i class="fa-solid fa-sitemap" style="color: rgb(81, 35, 217);" aria-hidden="true"></i>
                    </div>
                    <p class="card-title">สำหรับองค์กร</p>
                    <p class="card-subtitle">ระบบระดับองค์กร รองรับการขยายตัวสูง</p>
                    <span class="card-arrow text-indigo-600">
                        ดูรายละเอียด <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </a>
            </div>
<div class="VVS">
  <button type="button" onclick="window.location.href='html/จ่างาน.html'">จ้างงาน</button>
  <button type="button" onclick="window.location.href='html/จ่างาน.html'">อนิเมะ</button>
  <button type="button" onclick="window.location.href='html/จ่างาน.html'">ภาคเสียงภาษาต่างๆ</button>
  <button type="button" onclick="window.location.href='html/จ่างาน.html'">รับทำระบบPOS</button>
</div>
<!-- ส่วนแสดงการ์ดข้อมูลแบบ Dynamic จาก Database `oopp` -->
  <div class="coco">
    <?php
    require_once 'admin/db.php';
    // ดึงข้อมูลทั้งหมดจากตาราง services
    $sql = "SELECT * FROM services ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0):
        while ($row = $result->fetch_assoc()):
    ?>
        <div class="card-section">
          <article class="info-card">
            <img class="info-card__image" src="<?= htmlspecialchars($row['image_url']) ?>" alt="<?= htmlspecialchars($row['title']) ?>">
            <div class="info-card__body">
              <p class="eyebrow"><?= htmlspecialchars($row['eyebrow']) ?></p>
              <h2><?= htmlspecialchars($row['title']) ?></h2>
              <p><?= htmlspecialchars($row['description']) ?></p>
              <a class="info-card__button" href="<?= htmlspecialchars($row['link_url']) ?>">ดูข้อมูล</a>
            </div>
          </article>
        </div>
    <?php 
        endwhile;
    else:
    ?>
        <p style="text-align: center; width: 100%; color: #888; padding: 20px;">
          ยังไม่มีรายการข้อมูลในระบบ (สามารถเพิ่มได้ที่หน้า admin/manage_services.php)
        </p>
    <?php endif; ?>
  </div>
  <div class="projor"><h1>ขั้นตอนการทำงาน-ตรวจเช็กงาน</h1></div>

  <div class="process-cards">
    <div class="info-card__body-box1">
      <div class="info-card__image-box1">
        <img src="./img/chiemseherin-milky-way-8149815_1920.jpg" alt="บริการรับทำ SEO">
      </div>
      <p>รับทำ SEO</p>
      <h3>รับทำ SEO</h3>
    </div>
    <div class="info-card__body-box1">
      <div class="info-card__image-box1">
        <img src="./img/chiemseherin-milky-way-8149815_1920.jpg" alt="บริการรับทำ SEO">
      </div>
      <p>เช็กโครงสร้างเว็บไซต์</p>
      <h3>รับทำ SEO</h3>
    </div>
    <div class="info-card__body-box1">
      <div class="info-card__image-box1">
        <img src="./img/chiemseherin-milky-way-8149815_1920.jpg" alt="บริการรับทำ SEO">
      </div>
      <p>ออกแบบหน้าเว็บ</p>
      <h3>รับทำ SEO</h3>
    </div>
  </div>
  <!----------------process-cards-2-------------------------->
  <div class="process-cards">
    <div class="info-card__body-box1">
      <div class="info-card__image-box1">
        <img src="./img/chiemseherin-milky-way-8149815_1920.jpg" alt="บริการรับทำ SEO">
      </div>
      <p>รับทำ SEO</p>
      <h3>รับทำ SEO</h3>
    </div>
    <div class="info-card__body-box1">
      <div class="info-card__image-box1">
        <img src="./img/chiemseherin-milky-way-8149815_1920.jpg" alt="บริการรับทำ SEO">
      </div>
      <p>รับทำ SEO</p>
      <h3>รับทำ SEO</h3>
    </div>
    <div class="info-card__body-box1">
      <div class="info-card__image-box1">
        <img src="./img/chiemseherin-milky-way-8149815_1920.jpg" alt="บริการรับทำ SEO">
      </div>
      <p>รับทำ SEO</p>
      <h3>รับทำ SEO</h3>
    </div>
  </div>
<!----------------process-card-------------------------->
<div class="projor"><h1>ดูแลหลังการขาย</h1></div>
<div class="vs-vs">
  <video src="./Videos/189457-885804464.mp4"  autoplay muted loop></video>
  <div class="ppoo">
    <p>✓ แก้บัค/ข้อผิดพลาดฟรี</p>
    <p>✓ อัปเดตเนื้อหาตามที่ตกลง</p>
    <p>✓ สำรองข้อมูลเว็บไซต์</p>
    <p>✓ ตรวจสอบความปลอดภัย</p>
    <p>✓ ให้คำปรึกษาตลอดระยะดูแล</p>
  </div>
</div>

  <script src="js/app.js?v=2"></script>
  <script src="js/appwrite.js"></script>
  
  <footer class="site-footer">
    <div class="site-footer__grid">
      <div class="site-footer__column">
        <h4>บริการของเรา</h4>
        <ul>
          <li><a href="html2/page-01.html">สำเร็จรูป: สำหรับคนที่ต้องการงานเร็ว</a></li>
          <li><a href="html2/page-02.html">รับออกแบบใหม่ตามโจทย์ลูกค้า</a></li>
          <li><a href="html2/page-03.html">ให้คำแนะนำสำหรับนักเรียนที่ทำโปรเจกต์</a></li>
        </ul>
      </div>
      <div class="site-footer__column">
        <h4>เกี่ยวกับ</h4>
        <ul>
          <li><a href="index.html">เกี่ยวกับ THE SPACE</a></li>
          <li><a href="html2/page-08.html">ทีมงานของเรา</a></li>
          <li><a href="html2/page-04.html">ผลงานของเรา</a></li>
          <li><a href="html2/page-09.html">รีวิวจากลูกค้า</a></li>
        </ul>
      </div>
      <div class="site-footer__column">
        <h4>ช่วยเหลือและสนับสนุน</h4>
        <ul>
          <li><a href="html2/page-05.html">คำถามที่พบบ่อย</a></li>
          <li><a href="html2/page-06.html">นโยบายการให้บริการ</a></li>
          <li><a href="html2/page-10.html">คู่มือการใช้งาน</a></li>
          <li><a href="html2/page-11.html">แจ้งปัญหาการใช้งาน</a></li>
        </ul>
      </div>
      <div class="site-footer__column">
        <h4>ช่องทางการติดต่อ</h4>
        <ul>
          <li><a href="mailto:hello@thespace.example">v890x0@gmail.com</a></li>
          <li>โทร. 0653276864</li>
          <li><a href="html2/page-07.html">ส่งข้อความถึงเรา</a></li>
          <li>จันทร์ - ศุกร์ 09:00 - 18:00 น.</li>
          <li>กรุงเทพฯ และปริมณฑล</li>
        </ul>
      </div>
    </div>
    <div class="site-footer__bottom">
      <p>© 2026 THE SPACE. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
