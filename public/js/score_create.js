const left_score = document.querySelectorAll('.left');
const right_score = document.querySelectorAll('.right');
const selects = document.querySelectorAll('select');
const inputs = document.querySelectorAll('.input');
const date = document.querySelector('.date');

//片方が一本を選択した場合、もう片方のselectの選択を無しにする
const del_select = ($i) =>{
    let obj = selects[$i];
    obj.selectedIndex = 0;
}

//リセットボタンで入力値を全削除
const reset_btn = () =>{

    //selectの選択を解除
    for($i=0; $i<=29; $i++){
        let obj = selects[$i];
        obj.selectedIndex = 0;
    }

    //input type=textの入力を消す
    for($i=0; $i<=10; $i++){
        let obj = inputs[$i];
        obj.value = "";
    }

    date.value = "";
}
