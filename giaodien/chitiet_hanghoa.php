
<div class="boxleft w-full">

    
        <div class="text-mid w-full flex justify-center bg-[#37A9CD] rounded-[4px] items-center h-[50px]">
                        <a href=""><h1 class="font-bold text-[20px] text-[#ffff] ">Chi tiết sản phẩm</h1></a>
        </div>
        <div class="productt flex " style="">
            <div class="w-full border-[1px] flex items-center justify-center" style="">
                <img src="./hanghoa/img/<?=$ds['hinh']?>" alt="" style="width:400px;height:230px;">

                <ul class="p-[20px] ml-[100px]">
                    <li class="text-[16px] font-[500] my-[20px]">Mã hàng hóa: <?=$ds['ma_hh']?> - <?=$ds['ten_loai'] ?>  </li>
                    <li class="text-[16px] font-[500] my-[20px]">Tên hàng hóa: <?=$ds['ten_hh']?></li>
                    <li class="text-[16px] font-[500] my-[20px]">Đơn giá: <?=$ds['don_gia']?> $</li>
                    <li class="text-[16px] font-[500] my-[20px]">Giảm giá: <?=$ds['giam_gia']?>%</li>
                    <li class="text-[16px] font-[500] my-[20px]"><?=$ds['mo_ta']?></li>
                    <li class="text-[16px] font-[500] my-[20px]">Lượt xem: <?=$ds['so_luot_xem']?></li>
                </ul>
            </div>
        </div>
        <div class="w-full"> 
                <h2 class="bg-[#37A9CD] w-full flex justify-center items-center h-[30px] text-[18px] text-white">Bình luận</h2>
                <div class="border-[1px] p-[15px]">
                    <?php foreach($ds_bl as $dst){ ?>

                        <div class="relative grid grid-cols-1 gap-4 p-4 mb-8 border rounded-lg bg-white shadow-lg">
                            <div class="relative flex gap-4">
                                <img src="./tuan/img_upload/<?php extract($dst); echo `user`.$hinh?>" class="relative rounded-lg -top-8 -mb-4 bg-white border h-20 w-20" alt="" loading="lazy">
                                <div class="flex flex-col w-full">
                                    <div class="flex flex-row justify-between">
                                        <p class="relative text-xl whitespace-nowrap truncate overflow-hidden"><?php extract($dst); echo $fullname?></p>
                                    </div>
                                    <p class="text-gray-400 text-sm"><?php extract($dst); echo $ngay_bl?></p>
                                </div>
                            </div>
                            <p class="-mt-4 text-gray-500"><?php extract($dst); echo $noi_dung?></p>
                        </div>  
                    <?php } ?>

                </div>
        </div>


        <div class="comment">
            <?php if(isset($_SESSION['login'])){ ?>
                            <form action="./index.php?act=bl&id=<?=$ds['ma_hh']?>" method="post">
                                <textarea name="cmt" id="" cols="30" rows="10" class="w-full border-[2px] p-[25px]"></textarea>
                                <div class="w-full flex justify-center">
                                    <input type="submit" value="Bình luận" name="bl" class="bg-sky-500 hover:bg-sky-700 text-white w-[150px] h-[30px] rounded-[5px]">
                                </div>
                                
                            </form>
                    <?php } ?>
        </div>

        <div class="">
            
        </div>
</div>


