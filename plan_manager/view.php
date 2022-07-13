<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PLAN MANAGER</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="sidebar close">
            <div class="logo-details">
                <span class="logo_name">JOB DESCRIPTION</span>
            </div>
            <ul class="nav-links">
                <li>
                <a href="../index.php">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="link_name">DASHBOARD</span>
                </a>
                </li>
                <li>
                    <a href="index.php">
                    <i class='bx bx-book-alt' ></i>
                    <span class="link_name">PLAN MANAGER</span>
                    </a>
                </li>
                <li>
                <div class="iocn-link">
                    <a href="#">
                    <i class='bx bx-book-alt' ></i>
                    <span class="link_name">PRODUCTION</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>

                <ul class="sub-menu">
                    <li><a class="link_name" href="#">PRODUCTION</a></li>
                    <li><a href="../production/manager/">Manager</a></li>
                    <li><a href="../production/spv/">SPV</a></li>
                    <li><a href="../production/leader/">Leader</a></li>
                </ul>
                </li>
                <li>
                <div class="iocn-link">
                    <a href="#">
                    <i class='bx bx-book-alt' ></i>
                    <span class="link_name">ESQ/QUALITY</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">ESQ/QUALITY</a></li>
                    <li><a href="#">Manager</a></li>
                    <li><a href="#">SPV</a></li>
                    <li><a href="#">Staff</a></li>
                    <li><a href="#">Leader</a></li>
                    <li><a href="#">Admin</a></li>
                </ul>
                </li>
                <li>
                <div class="iocn-link">
                    <a href="#">
                    <i class='bx bx-book-alt' ></i>
                    <span class="link_name">MAINTANCE</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">MAINTANCE</a></li>
                    <li><a href="#">Manager</a></li>
                    <li><a href="#">SPV</a></li>
                    <li><a href="#">Staff</a></li>
                    <li><a href="#">Leader</a></li>
                    <li><a href="#">Admin</a></li>
                </ul>
                </li>
            <li>
            <div class="iocn-link">
                <a href="#">
                <i class='bx bx-book-alt' ></i>
                <span class="link_name">WAREHOUSE</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">WAREHOUSE</a></li>
                <li><a href="#">Manager</a></li>
                <li><a href="#">SPV</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Leader</a></li>
                <li><a href="#">Admin</a></li>
            </ul>
            </li>
            <li>
            <div class="iocn-link">
                <a href="#">
                <i class='bx bx-book-alt' ></i>
                <span class="link_name">WTP</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">WTP</a></li>
                <li><a href="#">Manager</a></li>
                <li><a href="#">SPV</a></li>
                <li><a href="#">Leader</a></li>
                <li><a href="#">Admin</a></li>
            </ul>
            </li>
            <li>
            <div class="iocn-link">
                <a href="#">
                <i class='bx bx-book-alt' ></i>
                <span class="link_name">HR</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">HR</a></li>
                <li><a href="#">Manager</a></li>
                <li><a href="#">SPV</a></li>
                <li><a href="#">Staff</a></li>
                <li><a href="#">Leader</a></li>
                <li><a href="#">Admin</a></li>
            </ul>
            </li>
            <li>
            <div class="iocn-link">
                <a href="#">
                <i class='bx bx-book-alt' ></i>
                <span class="link_name">FINANCE</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">FINANCE</a></li>
                <li><a href="#">Finance Manager</a></li>
                <li><a href="#">Finance Analisis</a></li>
            </ul>
            </li>
            <li>
            <div class="profile-details">

                <i class=' bx bx-log-out' > Logout</i>
            </div>
            </li>
            </ul>
        </div>

        <section class="home-section">
            <div class="home-content">
                <i class='bx bx-menu' ></i>
                <span class="text">PT. KRAFT HEINZ ABC</span>
            </div>
            
            <div class="upload-content">
                <?php
                $id    = mysqli_real_escape_string($koneksi,$_GET['id']);
                $query = mysqli_query($koneksi,"SELECT * FROM data_file WHERE id='$id' ");
                $data  = mysqli_fetch_array($query);
                ?>
                <h1>Upload File PDF</h1>
                <hr>
                <b>Judul:</b> <?php echo $data['judul'];?> | <a href='index.php'> Kembali </a>
                <hr>
                <embed src="file/<?php echo $data['nama_file'];?>" type="application/pdf" width="800" height="600" >
            </div>

        </section>

        <script>
            let arrow = document.querySelectorAll(".arrow");
            for (var i = 0; i < arrow.length; i++) {
                arrow[i].addEventListener("click", (e)=>{
            let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
                });
            }
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".bx-menu");
            console.log(sidebarBtn);
            sidebarBtn.addEventListener("click", ()=>{
                sidebar.classList.toggle("close");
            });
        </script>
    </body>
</html>