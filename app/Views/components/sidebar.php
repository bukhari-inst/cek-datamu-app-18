 <!-- Page Wrapper -->
 <div id="wrapper">

     <!-- Sidebar -->
     <ul class="navbar-nav bg-warning sidebar sidebar-dark accordion" id="accordionSidebar">

         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center">
             <div class="sidebar-brand-icon">
                 <img src="assets/img/kpu-logo.png" alt="logo kpu" width="50px">
             </div>
             <div class="sidebar-brand-text mx-3 text-black-50">Sistem Informasi</div>
         </a>

         <!-- Divider -->
         <hr class="sidebar-divider my-0">

         <!-- Nav Item - Dashboard -->
         <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url('/'); ?>">
                 <i class="fas fa-house-user"></i>
                 <span class="text-black-50">HOME</span></a>
         </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- INFO -->
         <li class="nav-item">
             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                 aria-expanded="true" aria-controls="collapseTwo">
                 <i class="fas fa-fw fa-file"></i>
                 <span class="text-black-50">INFO</span>
             </a>
             <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <a class="collapse-item text-black-50" href="<?php echo base_url('/pdpb'); ?>">Apa itu PDPB?</a>
                     <a class="collapse-item text-black-50" href="<?php echo base_url('/dpb'); ?>">Apa itu DPB?</a>
                     <a class="collapse-item text-black-50" href="<?php echo base_url('/kenapaPdpb'); ?>">Kenapa harus
                         ada PDPB?</a>
                     <a class="collapse-item text-black-50" href="cards.html">Alur</a>
                 </div>
             </div>
         </li>

         <!-- CEK DATA -->
         <li class="nav-item">
             <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                 aria-controls="collapsePages">
                 <i class="fas fa-fw fa-folder"></i>
                 <span class="text-black-50">CEK DATA</span>
             </a>
             <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                 data-parent="#accordionSidebar">
                 <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header text-danger"> Cek Data:</h6>
                     <!-- <a class="collapse-item" href="login.html"> Masukkan NIK</a> -->
                     <div type="button" class="btn collapse-item text-left" data-toggle="modal"
                         data-target="#exampleModal">
                         Masukkan NIK
                     </div>
                     <h6 class="collapse-header text-danger">Lapor :</h6>
                     <a class="collapse-item" href="404.html">Pemilih Baru</a>
                     <a class="collapse-item" href="blank.html">Ubah Data</a>
                     <a class="collapse-item" href="blank.html">TMS</a>
                 </div>
             </div>
         </li>

         <!-- Nav Item - Dashboard -->
         <li class="nav-item">
             <a class="nav-link" href="index.html">
                 <i class="fas fa-portrait"></i>
                 <span class="text-black-50">KONTAK</span></a>
         </li>
         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
             <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

     </ul>
     <!-- End of Sidebar -->

     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <form>
                         <div class="form-group">
                             <label for="exampleInputEmail1">Email address</label>
                             <input type="email" class="form-control" id="exampleInputEmail1"
                                 aria-describedby="emailHelp">
                             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                 else.</small>
                         </div>
                         <div class="form-group">
                             <label for="exampleInputPassword1">Password</label>
                             <input type="password" class="form-control" id="exampleInputPassword1">
                         </div>
                         <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Cari</button>
                         </div>
                     </form>
                 </div>

             </div>
         </div>
     </div>