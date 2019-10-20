<div class="container">
    <h3>ลบกิจกรรม</h3>
    <br>
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">ชื่อกิจกรรม</label>
                        <input type="text" class="form-control" placeholder="ชื่อกิจกรรม">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="exampleInputEmail1">วันที่เริ่มกิจกรรม</label>
                        <input type="text" class="form-control" placeholder="วันที่เริ่มกิจกรรม">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="exampleInputEmail1">วันที่สิ้นสุดกิจกรรม</label>
                        <input type="text" class="form-control" placeholder="วันที่สิ้นสุดกิจกรรม">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <button class="btn btn-danger" type="button">ลบ</button>
                    <a href="<?php echo base_url('activity/'); ?>" class="btn btn-outline-secondary" type="button">ยกเลิก</a>
                    </div>
                </div>    
            </form>
        </div>    
    </div> 