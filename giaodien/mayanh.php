
                <div class="text-mid w-full flex justify-center bg-[#37A9CD] rounded-[4px] items-center h-[50px]">
                        <a href=""><h1 class="font-bold text-[20px] text-[#ffff] ">Máy ảnh</h1></a>
                </div>
                <div class="row w-full mt-[10px]">
                    <?php foreach($ds_ma as $dsdt){?>
                    <div class="boxsp " style="margin: 5px 5px;">
                        <a href="./index.php?act=ct&id=<?php echo $dsdt['ma_hh'] ?>">
                            <div class="img flex justify-center">
                                    <img src="<?php extract($dsdt); echo "./hanghoa/img/$hinh"?>" alt="" style="width:150px;height:150px;">
                            </div>
                            <p class="mt-[10px] mb-[5px] flex justify-center items-center"><?php extract($dsdt); echo $don_gia?> $</p>
                            <a href="" class="flex justify-center items-center text-[black] font-semibold">
                                <?php extract($dsdt); echo $ten_hh?>
                            </a>
                        </a>
                    </div>
                    <?php } ?>
                </div>


