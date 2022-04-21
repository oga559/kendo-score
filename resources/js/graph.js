let keys = ["面", "小手", "胴"];
let counts = [men, kote, dou];
let id = "allChart";
let labels = keys;
let data = counts;

const make_chart = (id, labels, data) => {
    let ctx = document.getElementById(id);
    let myChart = new Chart(ctx, {
        type: "pie",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "本数内容割合",
                    data: data,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                    ],
                    borderWidth: 1,
                },
            ],
        },
        options: {},
    });
};
window.make_chart = make_chart;
make_chart(id, labels, data);
