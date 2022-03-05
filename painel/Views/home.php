<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Página Inicial</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Início</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="ecommerce-widget">

    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary" >
                <div class="card-body" style="background: #333;">
                    <h5 class="text-muted" style="color: beige !important;">Total membros</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1" style="color: beige;"><?php echo $total_registros; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 c'ol-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary" >
                <div class="card-body" style="background: #333;">
                    <h5 class="text-muted" style="color: beige !important;">Novos Membros</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1" style="color: beige !important;" ><?php echo $alistados_dia; ?></h1>
                    </div>
                    <?php if ($diferenca_alistados >= 0) : ?>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                            <span class="icon-circle-small icon-box-xs" style="background: black; "><i class="fa fa-fw fa-arrow-up" style="color: #991f00;" ></i></span><span class="ml-1" style="color: #e6b800;"><?php echo intval($diferenca_alistados); ?>%</span>
                        </div>
                    <?php else : ?>
                        <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                            <span  class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1"><?php echo intval($diferenca_alistados); ?>%</span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
      <div class="col-xl-5 col-lg-5 ">
            <div class="card border-3 border-top border-top-primary" >
                <div class="card-body" style="background: #333;">
                    <h5 class="text-muted" style="color: beige !important;">Novos Membros</h5>
                    <div class="metric-value d-inline-block">
                       <?php foreach($novosAlistados as $nA) : ?>
                       <img onmouseover="changeNick(<?php echo $nA['nickname']; ?>)" style="float: left;" src="https://www.habbo.com.br/habbo-imaging/avatarimage?user=<?php echo $nA['nickname']; ?>&action=wav&direction=4&head_direction=4&gesture=sml&size=b" title="<?php echo $nA['nickname']; ?>">
                       
                       <?php endforeach; ?>
                        
                        
                    </div>
                   
                
                        
                    
                </div>
            </div>
        </div> 
 
        
        
    </div>

</div>