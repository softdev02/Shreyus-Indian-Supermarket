<div class="mt-5 flex justify-center items-center col-span-full gap-6">
                <?php if ($page > 1): ?>
                    <a href="?page=<?php echo $page - 1; ?>" class="mr-3">Previous</a>
                <?php endif; ?>
                <div class="flex gap-2">
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                
                     <a href="?page=<?php echo $i; ?>" class="<?php echo ($page == $i) ? 'font-bold bg-red-500 py-2 px-4 rounded-full text-white' : 'font-bold bg-slate-300 py-2 px-4 rounded-full'; ?>"><?php echo $i; ?></a>
                   
                <?php endfor; ?>
                </div>

                <?php if ($page < $total_pages): ?>
                    <a href="?page=<?php echo $page + 1; ?>" class="ml-3">Next</a>
                <?php endif; ?>
            </div>