<div class="rowheader"><h1>Thống kê</h1></div>
<table>
    <thead>
        <tr>
            <th>Mã loại</th>
            <th>Tên loại</th>
            <th>Số lượng</th>
            <th>Giá cao nhất</th>
            <th>Giá thấp nhất</th>
            <th>Giá trung bình</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($tk as $tkm) :?>
        <tr>
            <td><?=$tkm['ml']?></td>
            <td><?=$tkm['tl']?></td>
            <td><?=$tkm['sl']?></td>
            <td><?=$tkm['max']?></td>
            <td><?=$tkm['min']?></td>
            <td><?=$tkm['tb']?></td>
        </tr>
<?php endforeach ?>
    </tbody>
</table>
<a href="../user/index.php?act=bd"><input type="button" value="Xem biểu đồ" class="border-[2px] bg-[#eee] border-[#868585]"></a>