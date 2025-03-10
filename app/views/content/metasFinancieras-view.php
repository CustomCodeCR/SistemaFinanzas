<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Finanzas Personales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <section class="section">
        <div class="container">
            <!-- Encabezado del Dashboard -->
            <div class="dashboard-header">
                <h1 class="title-head">Dashboard de Finanzas Personales</h1>
                <p class="subtitle">Resumen completo de tus finanzas</p>
            </div>

            <!-- Métricas Principales -->
            <div class="columns">
                <!-- Ingresos Mensuales -->
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <span class="icon is-large has-text-success">
                                        <i class="fas fa-wallet fa-2x"></i>
                                    </span>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Ingresos</p>
                                    <p class="metric-value has-text-success">$5,000</p>
                                    <p class="metric-change">+5.86% vs mes anterior</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gastos Mensuales -->
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <span class="icon is-large has-text-danger">
                                        <i class="fas fa-shopping-cart fa-2x"></i>
                                    </span>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Gastos</p>
                                    <p class="metric-value has-text-danger">$3,200</p>
                                    <p class="metric-change">-2.00% vs mes anterior</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ahorros Reales -->
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <span class="icon is-large has-text-info">
                                        <i class="fas fa-piggy-bank fa-2x"></i>
                                    </span>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Ahorros Reales</p>
                                    <p class="metric-value has-text-info">$1,800</p>
                                    <p class="metric-change">+10.00% vs mes anterior</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ahorros Estimados vs Reales -->
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <span class="icon is-large has-text-warning">
                                        <i class="fas fa-chart-line fa-2x"></i>
                                    </span>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Ahorros Estimados vs Reales</p>
                                    <div class="savings-comparison">
                                        <div>
                                            <p class="metric-value has-text-warning">$1,800</p>
                                            <p class="metric-change">Ahorros Reales</p>
                                        </div>
                                        <div>
                                            <p class="metric-value has-text-success">$2,000</p>
                                            <p class="metric-change">Ahorros Estimados</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gráficos -->
            <div class="columns">
                <!-- Gráfico de Ingresos vs Gastos -->
                <div class="column is-8">
                    <div class="card">
                        <div class="card-content">
                            <h2 class="title is-5">Ingresos vs Gastos</h2>
                            <canvas id="incomeExpensesChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Gráfico de Gastos por Categoría -->
                <div class="column is-4">
                    <div class="card">
                        <div class="card-content">
                            <h2 class="title is-5">Gastos por Categoría</h2>
                            <canvas id="expensesChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comparación de Ahorros -->
            <div class="columns">
                <div class="column">
                    <div class="card">
                        <div class="card-content">
                            <h2 class="title is-5">Comparación de Ahorros</h2>
                            <canvas id="savingsComparisonChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script para los gráficos (Chart.js) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de Ingresos vs Gastos
        const incomeExpensesCtx = document.getElementById('incomeExpensesChart').getContext('2d');
        const incomeExpensesChart = new Chart(incomeExpensesCtx, {
            type: 'line', // Tipo de gráfico
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
                datasets: [{
                    label: 'Ingresos',
                    data: [5000, 7000, 3000, 10000, 8000, 6000],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false
                }, {
                    label: 'Gastos',
                    data: [2000, 3000, 4000, 2500, 3500, 4500],
                    borderColor: 'rgba(255, 99, 132, 1)',
                    fill: false
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Gráfico de Gastos por Categoría
        const expensesCtx = document.getElementById('expensesChart').getContext('2d');
        const expensesChart = new Chart(expensesCtx, {
            type: 'doughnut', // Tipo de gráfico
            data: {
                labels: ['Vivienda', 'Transporte', 'Comida', 'Entretenimiento'],
                datasets: [{
                    label: 'Gastos por Categoría',
                    data: [1200, 400, 600, 300],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(153, 102, 255, 0.8)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });

        // Gráfico de Comparación de Ahorros
        const savingsComparisonCtx = document.getElementById('savingsComparisonChart').getContext('2d');
        const savingsComparisonChart = new Chart(savingsComparisonCtx, {
            type: 'bar', // Tipo de gráfico
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
                datasets: [{
                    label: 'Ahorro Esperado',
                    data: [1500, 1600, 1700, 1800, 1900, 2000],
                    backgroundColor: 'rgba(75, 192, 192, 0.8)'
                }, {
                    label: 'Ahorro Real',
                    data: [1400, 1550, 1650, 1750, 1850, 1950],
                    backgroundColor: 'rgba(153, 102, 255, 0.8)'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    </script>
</body>
<style>
        
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .dashboard-header {
            background:darkblue ;
            color: #fff;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .title-head{
            color: white;
            font-size: x-large;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            background-color: white;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .metric-value {
            font-size: 2rem;
            font-weight: bold;
        }

        .metric-change {
            font-size: 0.9rem;
            color: #666;
        }

        .table {
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
        }

        .tag {
            border-radius: 5px;
        }

        canvas {
            max-width: 100%;
            height: auto;
        }

        .section {
            padding: 2rem 1.5rem;
        }

        .title {
            color: #000;
        }

        .subtitle {
            color: #E3DAC9;
        }

        .savings-comparison {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .savings-comparison .metric-value {
            font-size: 1.5rem;
        }

        .savings-comparison .metric-change {
            font-size: 0.8rem;
        }
    </style>
</html>