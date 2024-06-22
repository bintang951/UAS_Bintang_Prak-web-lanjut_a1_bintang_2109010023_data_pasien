<?php
// Mendapatkan path dari URL saat ini
$current_url = $_SERVER['REQUEST_URI'];
?>



<div id="" class="sidebar" style="background-color:rgba(254, 209, 209, 0.7);">
    <div class="" style="padding-top: 50%">
        <nav>
            <ul class="nav">

                <li>
                    <a href="/pasien" class="<?php echo $current_url == '/pasien' ? 'active' : ''; ?>">
                        <i class="lnr lnr-users" style="color: black"></i>
                        <span style="color: black">Data Pasien</span>
                    </a>
                </li>
                <li>
                    <a onclick="return confirm('Apakah anda logout?')" href="/" class="<?php echo $current_url == '/pasien' ? 'active' : ''; ?>">
                        <i class="lnr lnr-  " style="color: black"></i>
                        <span style="color: black">Logout</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</div>
