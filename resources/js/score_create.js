const selects = document.querySelectorAll('select');
const inputs = document.querySelectorAll('.input');
const date = document.querySelector('.date');
const openBtn = document.getElementById('openBtn');
const closeBtn = document.getElementById('closeBtn');
const modal_content = document.querySelector('.modal_content');
const p = document.createElement("p");


//モーダル表示
const modal_open = ($input,$k) =>{
    modal.style.display = 'block'
    // モーダル表示して、過去に登録したプレイヤー登録可能
    //Scoreデータの多次元配列を１つずつ取り出す
    Laravel.player.forEach(element => {
    //Scoreデータから試合名を作成する処理
    const game_title = document.createTextNode(element.game_name);
    p.appendChild(game_title);
    modal_content.appendChild(p);
    //PlayerデータをScoreデータからリレーションで取り出す
    //そしてPlayer表示
    element.players.forEach(element =>{
        let btn = document.createElement('button');
        btn.type = 'button';
        btn.innerHTML = element.name;
        btn.value = element.id;
        btn.onclick = function form_in(){
            document.querySelector('.'+$input).value = element.name;
            let in_hidden = document.createElement("input");
            in_hidden.setAttribute("type", "hidden");
            in_hidden.value = element.id;
            in_hidden.name = 'score[player_id]['+$k+']';
            date.appendChild(in_hidden);
            console.log(in_hidden);
        }
        p.appendChild(btn);
    })
})
}
window.modal_open = modal_open;

// 非表示（closeBtnというidのボタンがクリックされたら、display:noneになる）
window.closeBtn.addEventListener('click', function(){
    modal.style.display = 'none';
    while( p.firstChild ){
        p.removeChild( p.firstChild );
    }
})

//select両者１本とることがないようにする
const del_select = ($i) =>{
    let obj = selects[$i];
    obj.selectedIndex = 0;
}
window.del_select = del_select;
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
    //input type=dateの入力を消す
    date.value = "";
}
window.reset_btn = reset_btn;
