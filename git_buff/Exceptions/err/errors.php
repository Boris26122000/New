<?php
include "../data/data.php";

class EmptySearch extends \Exception {

}
class WrongSearch extends \Exception{

}


$UserSearch = $_POST['search'];
echo $UserSearch;
function search($UserSearch, $goods){
    if($UserSearch === ""){
        throw new EmptySearch("Пустое поле");
    }else {
        for($i=1; $i<=3; $i++) {
            if($goods[$i] == $UserSearch){?>
                <div class="obj">
                                <div class="obj-name"><?=$goods[$i]['name']?></div>
                                <div class="obj-img" style= "background: url('<?= $goods[$i]['image']?>')  no-repeat\"></div>
                                <div class="obj-price"><?=$goods[$i]['price']?></div>
                                <div class="obj-description"><?=$goods[$i]['description']?></div>
                                <div class="obj-key"><?=$goods[$i]?></div>
                </div>
<?  }  else {
                throw new WrongSearch("Несуществующий товар");
            }
        }
    }
}


try {
    $a = search($UserSearch, $goods);
} catch(EmptySearch $e){
  echo "Исключение:" . $e->getMessage();
} catch(WrongSearch $e){
    echo "Исключение:" . $e->getMessage();
}

echo $a;

