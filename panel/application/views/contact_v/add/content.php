<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Ürün Ekle
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("contact/save"); ?>" method="post">
                    <div class="form-group">
                        <label>Firma/Şirket/Kurum/Kuruluş Adı</label>
                        <input class="form-control" placeholder="Başlık" name="title">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Telefon 1</label>
                        <input class="form-control" placeholder="Telefon 1" name="tel1">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("tel1"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Telefon 2</label>
                        <input class="form-control" placeholder="Telefon 2" name="tel2">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("tel2"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Fax</label>
                        <input class="form-control" placeholder="Fax" name="fax">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("fax"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Adres</label>
                        <textarea name="adres" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("contact"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>