<div class="container">
  <h3>บันทึกกิจกรรม</h3>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="ชื่อกิจกรรม" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">ค้นหา</button>
          <a href="<?php echo base_url('activity/insert'); ?>" class="btn btn-info" type="button">เพิ่มกิจกรรม</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ชื่อกิจกรรม</th>
            <th scope="col">วันที่ทำกิจกรรม</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>กิจกรรมค่าย 4 ชั้นปี</td>
            <td>12 เม.ย. - 15 เม.ย. 2563</td>
            <td><a href="<?php echo base_url('activity/update'); ?>" type="button" class="btn btn-warning">แก้ไข</a>
              <a href="<?php echo base_url('activity/delete'); ?>" type="button" class="btn btn-danger">ลบ</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>