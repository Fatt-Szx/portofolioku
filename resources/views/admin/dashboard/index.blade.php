<div class="container-fluid">
    
<h1>Dashboard</h1>
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body bg-primary">
          Selamat datang di {{ auth()->user()->name}} 😘
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="row">
  <div class="col-md-3">
      <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-envelope"></i></span>
      
          <div class="info-box-content">
            <span class="info-box-text">Sertifikat</span>
            <span class="info-box-number">
                {{ $certification }}              
              <small>Sertifikat</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
  </div>
  
  <div class="col-md-3">
      <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file"></i></span>
      
          <div class="info-box-content">
            <span class="info-box-text">Pengalaman</span>
            <span class="info-box-number">
                {{ $experience }} 
              <small>Pengalaman</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
  </div>
  
  <div class="col-md-3">
      <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>
      
          <div class="info-box-content">
            <span class="info-box-text">Projek</span>
            <span class="info-box-number">
                {{ $project }} 
              <small>Projek</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
  </div>
  
  <div class="col-md-3">
      <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
      
          <div class="info-box-content">
            <span class="info-box-text">Skill</span>
            <span class="info-box-number">
                {{ $skill }} 
              <small>Skill</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
  </div>
</div>
  </div>
