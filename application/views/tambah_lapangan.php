 <section id="container" >
<section id="mainBody">
<div class="container">
<h3 class="title"><span>Data Lapangan</span></h3>
  <div class="well">
    <form class="form-horizontal" action="<?= base_url();?>lapangan_crud/insert_lap" method="POST" enctype="multipart/form-data">
      <div class="control-group">
        <label class="control-label" for="nama_lap">Nama Lapangan<sup>*</sup></label>
        <div class="controls">
          <input type="text" id="nama_lap" name="nama_lap" placeholder="Nama Lapangan">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="deskripsi">Description<sup>*</sup></label>
        <div class="controls">
          <textarea class="form-control" rows="3" id="deskripsi" name="deskripsi" placeholder="Description"></textarea>
        </div>
      </div>
      <h4>Tarif/Jam</h4>
      <div class="control-group">
        <label class="control-label" for="pagi">Pagi<sup>*</sup></label>
        <div class="controls">
          <input type="text" id="pagi" name="pagi" placeholder="Tarif Pagi">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="siang">Siang<sup>*</sup></label>
        <div class="controls">
          <input type="text" id="siang" name="siang" placeholder="Tarif Siang">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="malam">Malam<sup>*</sup></label>
        <div class="controls">
          <input type="text" id="malam" name="malam" placeholder="Tarif Malam">
        </div>
      </div>

      <div class="control-group">
        <div class="controls">
          <input class="btn btn-large" type="submit" value="Submit"/>
        </div>
      </div>
           
      <p class="pull-right badge badge-important">[ * ] Required field  </p>
      <br>

    </form> 
  </div>
</div>
</section>