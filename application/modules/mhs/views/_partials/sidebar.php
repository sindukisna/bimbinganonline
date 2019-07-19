<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="<?php echo base_url('images/faces/face1.jpg')?>" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $this->session->userdata('ses_nama'); ?></p>
                  <div>
                    <small class="designation text-muted">Mahasiswa</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <a href="#mymodal" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-block">Kelas</a>
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/mhs')?>">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                 <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('/mhs/bmb')?>">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Akun</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('/aaa')?>"> Pengaturan </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/samples/register.html"> Ganti Password </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo site_url('member/member_logout') ?>"> Logout </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>