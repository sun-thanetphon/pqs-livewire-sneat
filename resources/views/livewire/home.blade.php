 <!-- Layout wrapper -->
 <div class="layout-wrapper layout-content-navbar">
     <div class="layout-container">
         <!--  slidebar -->
         <livewire:slidebars.slidebar />
         <!-- / slidebar -->
         <!-- Layout container -->
         <div class="layout-page">

             <!-- Navbar -->
             <livewire:navbars.navbar />
             <!-- / Navbar -->

             <!-- Content wrapper -->
             <div class="content-wrapper">

                 <!-- Content -->

                 <div class="container-xxl flex-grow-1 container-p-y">
                     <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">เข้าห้องสอบ /</span>
                         เลือกวิชาเข้าสอบ
                     </h4>



                     <!-- Grid Card -->
                     <h6 class="pb-1 mb-4 text-muted">รายการวิชาที่ลงทะเบียน</h6>
                     <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">

                         <div class="col">
                             <div class="card h-100">
                                 <img class="card-img-top" src="https://img.freepik.com/free-vector/online-exam-isometric-web-banner_33099-2305.jpg" alt="Card image cap" />
                                 <div class="card-body">

                                     <h5 class="card-title">วิชาการเดินเรือ</h5>

                                     <p class="card-text">
                                         คะแนนเต็ม : 100
                                     </p>

                                     <p class="card-text">
                                         เวลาเข้าสอบ : 09:00 - 11:00
                                     </p>

                                     <span class="badge rounded-pill bg-success text-dark">ห้องสอบเปิดแล้ว</span>
                                     <hr>

                                     <div class="mt-2 text-center">
                                         <button class="btn btn-primary">เข้าห้องสอบ</button>
                                     </div>

                                 </div>
                             </div>
                         </div>

                         <div class="col">
                             <div class="card h-100">
                                 <img class="card-img-top" src="https://img.freepik.com/free-vector/online-exam-isometric-web-banner_33099-2305.jpg" alt="Card image cap" />
                                 <div class="card-body">
                                     <h5 class="card-title">วิชาการบิน</h5>

                                     <p class="card-text">
                                         คะแนนเต็ม : 200
                                     </p>

                                     <p class="card-text">
                                         เวลาเข้าสอบ : 09:00 - 11:00
                                     </p>

                                     <span class="badge rounded-pill bg-danger text-white">ห้องสอบยังไม่เปิด</span>
                                     <hr>

                                     <div class="mt-2 text-center">
                                         <button class="btn btn-primary">เข้าห้องสอบ</button>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="col">
                             <div class="card h-100">
                                 <img class="card-img-top" src="https://img.freepik.com/free-vector/online-exam-isometric-web-banner_33099-2305.jpg" alt="Card image cap" />
                                 <div class="card-body">
                                     <h5 class="card-title">วิชาการปืน</h5>

                                     <p class="card-text">
                                         คะแนนเต็ม : 150
                                     </p>

                                     <p class="card-text">
                                         เวลาเข้าสอบ : 09:00 - 11:00
                                     </p>

                                     <span class="badge rounded-pill bg-success text-dark">ห้องสอบเปิดแล้ว</span>
                                     <hr>

                                     <div class="mt-2 text-center">
                                         <button class="btn btn-primary">เข้าห้องสอบ</button>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>

                     <!--/ Card layout -->
                 </div>
                 <!-- / Content -->

                 <div class="content-backdrop fade"></div>
             </div>
             <!-- Content wrapper -->
         </div>
         <!-- / Layout page -->
     </div>

     <!-- Overlay -->
     <div class="layout-overlay layout-menu-toggle"></div>


 </div>

 @section('scriptcustom')


 @stop
 <!-- / Layout wrapper -->