const selects = document.querySelectorAll('select');
const inputs = document.querySelectorAll('.input');
const date = document.querySelector('.date');
const openBtn = document.getElementById('openBtn');
const closeBtn = document.getElementById('closeBtn');
const modal_content = document.querySelector('.modal_content');

// 表示（openBtnというidのボタンがクリックされたら、display:blockになる）
openBtn.addEventListener('click', function(){
    modal.style.display = 'block'
console.log(modal_content);
    //Scoreデータの多次元配列を取り出す
    Laravel.player.forEach(element => {

        //試合名を作成する処理
        const p = document.createElement("p");
        const game_title = document.createTextNode(element.game_name);
        p.appendChild(game_title);
        modal_content.appendChild(p);

        //Playerテーブルからselect作成する処理
        let select = document.createElement('select');
        //PlayerデータをScoreデータからリレーションで取り出す
        element.players.forEach(element =>{
            console.log(element)
            let option = document.createElement("option");
            option.text = element.name;
            option.value = element.id;
            select.appendChild(option);
            p.appendChild(select);
        })

    });

})

// 非表示（closeBtnというidのボタンがクリックされたら、display:noneになる）
closeBtn.addEventListener('click', function(){
    modal.style.display = 'none';
})

addEventListener('click', function(close_bg){
    if(close_bg.target === modal){
        modal.style.display = 'none';
    }
})

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

    //input type=dateの入力を消す
    date.value = "";
}

