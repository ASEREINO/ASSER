<?php
session_start();

// التحقق مما إذا كان المستخدم قد سجل الدخول
if (!isset($_SESSION['login_user'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html dir="rtl" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>يوسف علي عبدالله عسيري</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5; /* Light gray */
            color: #333;
            text-align: center;
        }

        header {
            background-color: #4a4a4a; /* Dark gray */
            color: white;
            padding: 20px;
            border-bottom: 5px solid black; /* Accent color */
        }

        header img {
            border-radius: 50%;
            width: 200px; /* Increased size */
            height: 200px;
            object-fit: cover;
            border: 3px solid #ffffff;
            opacity: 0.7;
            transition: opacity 0.3s ease-in-out;
        }

        header img:hover {
            opacity: 1;
        }

        .header-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
            font-family: 'Playfair Display', serif;
        }

        header p {
            margin: 5px 0 0;
            font-size: 18px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
            margin-bottom: 200px;
        }

        .box {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 20px;
            padding: 20px;
            width: 250px;
            cursor: pointer;
            text-align: right; /* Right-aligned text */
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .box h3 {
            margin-top: 0;
            color: black;
            font-size: 25px;
        }

        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .content {
            display: none;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px auto;
            text-align: right; /* Right-aligned text */
            max-width: 800px;
        }

        .active {
            display: block;
        }

        footer {
            background-color: #4a4a4a;
            color: white;
            padding: 15px;
            width: 100%;
            text-align: center;
            border-top: 5px solid black;
        }

        .language-switcher {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: #4a4a4a;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .language-switcher:hover {
            background-color: #333;
        }

        @media (max-width: 1200px) {
            header h1 {
                font-size: 32px;
            }

            header p {
                font-size: 16px;
            }
        }

        @media (max-width: 992px) {
            header img {
                width: 120px;
                height: 120px;
            }

            header h1 {
                font-size: 28px;
            }

            header p {
                font-size: 14px;
            }
        }

        @media (max-width: 768px) {
            .box {
                width: 90%;
                max-width: 500px;
                margin: 15px auto;
            }

            header h1 {
                font-size: 24px;
            }

            header p {
                font-size: 14px;
            }
        }

        @media (max-width: 576px) {
            header img {
                width: 100px;
                height: 100px;
            }

            header h1 {
                font-size: 20px;
            }

            .box {
                width: 100%;
                max-width: 400px;
                margin: 10px auto;
            }

            .content {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="language-switcher" onclick="window.location.href='index.html'"> English</div>
    
    <header>
        <img src="ys.jpg" alt="يوسف علي عبدالله عسيري">
        <div class="header-content">
            <h1>يوسف علي عبدالله عسيري</h1>
            <h3>مبرمج ومطور ويب</h3>
            <div class="contact-info">
                <div>
                    <i class="fas fa-phone"></i>
                    <span>966550565690+</span>
            <br>  <br></div>
                <div>
                    <i class="fas fa-envelope"></i>
                    <span>90yosf@gmail.com</span>
              <br><br>  </div>
                <div>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>الرياض، المملكة العربية السعودية</span>
              <br><br>  </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="box" id="about-box">
            <h3>عني</h3>
            <p>مقدمة وأهداف مهنية.</p>
        </div>

        <div class="box" id="education-box">
            <h3>التعليم</h3>
            <p>دبلوم في تكنولوجيا البرمجة وتطوير الويب.</p>
        </div>

        <div class="box" id="experience-box">
            <h3>الخبرة</h3>
            <p>ملخص الخبرات المهنية.</p>
        </div>
        <div class="box" id="projects-box">
            <h3>المشاريع</h3>
            <p>أبرز المشاريع والإنجازات.</p>
        </div>
        <div class="box" id="skills-box">
            <h3>المهارات</h3>
            <p>المهارات التقنية ولغات البرمجة.</p>
        </div>
        <div class="box" id="courses-box">
            <h3>الدورات</h3>
            <p>قائمة الشهادات والدورات.</p>
        </div>
    </div>

    <!-- Content Sections -->
    <div id="about-content" class="content">
        <h2>عني</h2>
        <p>أنا يوسف علي عبدالله عسيري، حاصل على دبلوم في تكنولوجيا البرمجة وتطوير الويب، بالإضافة إلى شهادة  إدارة مكتبية. أتمتع بمهارات في البرمجة الخلفية باستخدام Java، JavaScript، وPHP، مع خبرة من تعلمي في HTML، CSS، SQL، وSQLPL. لدي خبرة في الموارد البشرية. أهدف إلى تطوير مهاراتي وتطبيق التقنيات الحديثة لتحقيق نجاحات جديدة.</p>
    </div>

    <div id="education-content" class="content">
        <h2>التعليم</h2>
        <p>
            <strong>دبلوم في تكنولوجيا البرمجة وتطوير الويب (2021 - 2024/6)</strong><br>
            كلية الاتصالات والمعلومات، الرياض
        </p>
    </div>

    <div id="experience-content" class="content">
        <h2>الخبرة</h2>
        <p>كاتب موارد بشرية (2022/6 - 2023/9): التواصل الفعال، إدارة الوثائق، تحليل بيانات التوظيف.</p>
    </div>

    <div id="projects-content" class="content">
        <h2>المشاريع</h2>
        <p>مشروعي التخرج، دليل السعودية، هو موقع مصمم لتقديم دليل شامل لجميع مناطق المملكة العربية السعودية. يقدم الموقع معلومات مفصلة عن الأماكن السياحية، الإقامة، الأنشطة الثقافية والترفيهية، والخدمات المحلية. تم تطوير المشروع باستخدام PHP، Java، JavaScript، SQL، HTML، وCSS. يوفر المشروع منصة متكاملة لتعزيز تجربة المستخدم وتسهيل تخطيط الرحلات.</p>
    </div>

    <div id="skills-content" class="content">
        <h2>المهارات</h2>
        <ul>
            <li>برمجة خلفية: Java، JavaScript، PHP</li>
            <li>تطوير واجهات: HTML، CSS</li>
            <li>إدارة قواعد البيانات: SQL، SQLPL</li>
            <li>الأدوات: VScode، Android Studio، Oracle APEX</li>
            <li>إدارة المكاتب والموارد البشرية</li>
            <li>التحليل</li>
            <li>العمل الجماعي</li>
            <li>ادخال البيانات </li>
        </ul>
    </div>

    <div id="courses-content" class="content">
        <h2>الدورات</h2>
        <ul>
            <li>شهادة في البرمجة التمهيدية (منصة برمج)</li>
            <li>شهادة في إدارة المكاتب</li>
            <li>شهادة في إتقان اللغة الإنجليزية (أكاديمية الزرقاء)</li>
            <li>شهادة في دراسات الجدوى لإدارة الأعمال</li>
        </ul>
    </div>

    <footer>
        <p>&copy; 2024 يوسف علي عبدالله عسيري</p>
    </footer>

    <script>
        const boxes = document.querySelectorAll('.box');
        const contents = document.querySelectorAll('.content');

        boxes.forEach(box => {
            box.addEventListener('click', () => {
                contents.forEach(content => content.classList.remove('active'));
                document.getElementById(box.id.replace('box', 'content')).classList.add('active');
                window.scrollTo(0, document.getElementById(box.id.replace('box', 'content')).offsetTop);
            });
        });

        document.querySelector('.language-switcher').addEventListener('click', () => {
            window.location.href = 'index.html';
        });
    </script>
</body>
</html>
