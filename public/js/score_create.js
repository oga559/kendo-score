const left_score = document.querySelectorAll('.left');
const right_score = document.querySelectorAll('.right');
const selects = document.querySelectorAll('select');

//片方が一本を選択した場合、もう片方のselectの選択を無しにする
const del_select = ($i) =>{
    var obj = selects[$i];
    obj.selectedIndex = 0;
}

