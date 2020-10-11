<?php
// help.php
echo "\nAVAILABLE COMMANDS: \n\n";

echo " * BUGS \n";
echo ">> cli-scripts\bug_create.php <reporter_id> <engineer_id> <product_ids> \n";
echo ">> cli-scripts\bug_list.php \n";
echo ">> cli-scripts\bug_list_array.php \n";
echo ">> cli-scripts\bug_list_repository.php \n";
echo ">> cli-scripts\bug_list_by_status.php <bug_status:OPEN/CLOSE> \n";
echo ">> cli-scripts\bug_show.php <bug_id> \n";
echo ">> cli-scripts\bug_close.php <bug_id> \n";
echo "\n";
echo " * PRODUCT \n";
echo ">> cli-scripts\product_create.php <name> \n";
echo ">> cli-scripts\product_list.php \n";
echo ">> cli-scripts\product_show.php <product_id> \n";
echo ">> cli-scripts\product_update.php <product_id> <new-name> \n";
echo ">> cli-scripts\products.php \n";
echo "\n";
echo " * USER \n";
echo ">> cli-scripts\user_create.php <name> \n";
echo ">> cli-scripts\dashboard.php <user-id> \n";
echo "\n";

