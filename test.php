<?php

// touch("myname.txt");
// var_dump(is_file("myname.txt"));
// var_dump(is_dir("src"));

print_r(scandir("."));

unlink("myname.txt");
