<template>
    <canvas ></canvas>
</template>

<script>
import Chart from 'chart.js';
import {planetChartData} from '../chart-area';

    export default {
        props: ['title'],
        methods: {
            createChart(chartData) {
                const myChart = new Chart(this.$el, {
                type: chartData.type,
                data: chartData.data,
                options: chartData.options,
                });
            },
            countSibling() {
                console.log(this.$parent)
            }
        },
        data() {
            return {
                ChartData: planetChartData
            }
        },
        mounted() {
            this.createChart(this.ChartData);
        }
}
</script>
