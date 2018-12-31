<div class="grid-container">
    <div class="mainleft">
        <div class="card sidebar-menu">
            <div class="card-body">
                <ul class="nav nav-pills flex-column"><a href="<?= base_url('Home/');?>CPU" class="nav-link"><i class="fa fa-align-justify"></i> CPU
                        <p class="text-muted"><?php echo $this->session->CPU;?></p></a>
                    <a href="<?= base_url('Home/');?>MB" class="nav-link"><i class="fa fa-align-justify"></i> Mainboard
                        <p class="text-muted"><?php echo $this->session->MB;?></p></a>
                    <a href="<?= base_url('Home/');?>RAM" class="nav-link"><i class="fa fa-align-justify"></i> RAM
                        <p class="text-muted"><?php echo $this->session->RAM;?></p></a>
                    <a href="<?= base_url('Home/');?>VGA" class="nav-link"><i class="fa fa-align-justify"></i> VGA Card
                        <p class="text-muted"><?php echo $this->session->VGA;?></p></a>
                    <a href="<?= base_url('Home/');?>HDD" class="nav-link"><i class="fa fa-align-justify"></i> Harddisk
                        <p class="text-muted"><?php echo $this->session->HDD;?></p></a>
                    <a href="<?= base_url('Home/');?>SSD" class="nav-link"><i class="fa fa-align-justify"></i> Solid State Drive
                        <p class="text-muted"><?php echo $this->session->SSD;?></p></a>
                    <a href="<?= base_url('Home/');?>COOL" class="nav-link"><i class="fa fa-align-justify"></i> CPU Cooling
                        <p class="text-muted"><?php echo $this->session->COOL;?></p></a>
                    <a href="<?= base_url('Home/');?>PSU" class="nav-link"><i class="fa fa-align-justify"></i> PSU
                        <p class="text-muted"><?php echo $this->session->PSU;?></p></a>
                    <a href="<?= base_url('Home/');?>CASE" class="nav-link"><i class="fa fa-align-justify"></i> Case
                        <p class="text-muted"><?php echo $this->session->CASE;?></p></a>
                    <a href="<?= base_url('Home/');?>" class="nav-link">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Build</button>
                        </div></a>
                </ul>
            </div>
        </div>


    </div>



