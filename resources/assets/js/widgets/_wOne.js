window.addEventListener("load", function () {
    try {
        let getcorkThemeObject = sessionStorage.getItem("theme");
        let getParseObject = JSON.parse(getcorkThemeObject);
        let ParsedObject = getParseObject;

        let Theme = ParsedObject.settings.layout.darkMode ? "dark" : "light";

        Apex.tooltip = { theme: Theme };

        /**
         * ==============================
         * |    @Options Charts Script   |
         * ==============================
         */

        // Total Orders Chart
        var totalOrdersOptions = {
            chart: {
                id: "sparkline1",
                group: "sparklines",
                type: "area",
                height: 290,
                sparkline: { enabled: true },
            },
            stroke: { curve: "smooth", width: 2 },
            fill: {
                type: "gradient",
                gradient: {
                    type: "vertical",
                    shadeIntensity: 1,
                    inverseColors: false,
                    opacityFrom: 0.3,
                    opacityTo: 0.05,
                    stops: [100, 100],
                },
            },
            series: [
                {
                    name: "Total Orders",
                    data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40],
                },
            ],
            labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
            yaxis: { min: 0 },
            grid: { padding: { top: 125, right: 0, bottom: 0, left: 0 } },
            tooltip: { x: { show: false }, theme: Theme },
            colors: ["#00ab55"],
        };

        // Revenue Chart
        var revenueOptions = {
            chart: {
                id: "sparkline2",
                group: "sparklines",
                type: "area",
                height: 290,
                sparkline: { enabled: true },
            },
            stroke: { curve: "smooth", width: 2 },
            fill: {
                type: "gradient",
                gradient: {
                    type: "vertical",
                    shadeIntensity: 1,
                    inverseColors: false,
                    opacityFrom: 0.3,
                    opacityTo: 0.05,
                    stops: [100, 100],
                },
            },
            series: [
                {
                    name: "Revenue",
                    data: [50, 60, 55, 80, 70, 90, 85, 95, 78, 88],
                },
            ],
            labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
            yaxis: { min: 0 },
            grid: { padding: { top: 125, right: 0, bottom: 0, left: 0 } },
            tooltip: { x: { show: false }, theme: Theme },
            colors: ["#ff9800"],
        };

        // Profit Chart
        var profitOptions = {
            chart: {
                id: "sparkline3",
                group: "sparklines",
                type: "area",
                height: 290,
                sparkline: { enabled: true },
            },
            stroke: { curve: "smooth", width: 2 },
            fill: {
                type: "gradient",
                gradient: {
                    type: "vertical",
                    shadeIntensity: 1,
                    inverseColors: false,
                    opacityFrom: 0.3,
                    opacityTo: 0.05,
                    stops: [100, 100],
                },
            },
            series: [
                {
                    name: "Profit",
                    data: [20, 30, 25, 40, 35, 50, 45, 55, 48, 58],
                },
            ],
            labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
            yaxis: { min: 0 },
            grid: { padding: { top: 125, right: 0, bottom: 0, left: 0 } },
            tooltip: { x: { show: false }, theme: Theme },
            colors: ["#e91e63"],
        };

        /**
         * ==============================
         * |    @Render Charts Script    |
         * ==============================
         */
        var totalOrdersChart = new ApexCharts(
            document.querySelector("#total-orders"),
            totalOrdersOptions
        );
        var revenueChart = new ApexCharts(
            document.querySelector("#revenue-chart"),
            revenueOptions
        );
        var profitChart = new ApexCharts(
            document.querySelector("#profit-chart"),
            profitOptions
        );

        totalOrdersChart.render();
        revenueChart.render();
        profitChart.render();

        /**
         * Function to Update Chart Data (Without Changing Style)
         */
        function updateChartData(chart, newData) {
            chart.updateSeries([{ data: newData }]);
        }

        /**
         * Example: Update Chart Data on Some Event
         */
        document
            .querySelector("#update-charts")
            .addEventListener("click", function () {
                let newTotalOrdersData = [
                    15, 25, 22, 30, 28, 35, 30, 38, 32, 40,
                ];
                let newRevenueData = [55, 65, 60, 85, 75, 100, 90, 110, 88, 98];
                let newProfitData = [25, 35, 30, 45, 40, 55, 50, 60, 52, 65];

                updateChartData(totalOrdersChart, newTotalOrdersData);
                updateChartData(revenueChart, newRevenueData);
                updateChartData(profitChart, newProfitData);
            });

        /**
         * =================================================================================================
         * |     @Re_Render | Re-render all necessary JS when clicked to switch/toggle theme              |
         * =================================================================================================
         */
        document
            .querySelector(".theme-toggle")
            .addEventListener("click", function () {
                let getcorkThemeObject = sessionStorage.getItem("theme");
                let getParseObject = JSON.parse(getcorkThemeObject);
                let ParsedObject = getParseObject;

                let darkMode = ParsedObject.settings.layout.darkMode;

                let newFillOptions = darkMode
                    ? {
                          type: "gradient",
                          gradient: {
                              type: "vertical",
                              shadeIntensity: 1,
                              inverseColors: false,
                              opacityFrom: 0.3,
                              opacityTo: 0.05,
                              stops: [100, 100],
                          },
                      }
                    : {
                          type: "gradient",
                          opacity: 0.9,
                          gradient: {
                              type: "vertical",
                              shadeIntensity: 1,
                              inverseColors: false,
                              opacityFrom: 0.45,
                              opacityTo: 0.1,
                              stops: [100, 100],
                          },
                      };

                totalOrdersChart.updateOptions({ fill: newFillOptions });
                revenueChart.updateOptions({ fill: newFillOptions });
                profitChart.updateOptions({ fill: newFillOptions });
            });
    } catch (e) {
        console.log(e);
    }
});
