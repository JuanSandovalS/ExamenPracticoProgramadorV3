// Factorial
document.getElementById('formFactorial').addEventListener('submit', function(event) {
    event.preventDefault();
    const numero = parseInt(document.getElementById('inputFactorial').value);
    const resultado = calcularFactorial(numero);
    document.getElementById('resultadoFactorial').innerText = `El factorial de ${numero} es ${resultado}`;
});

function calcularFactorial(n) {
    if (n === 0) return 1;
    return n * calcularFactorial(n - 1);
}

// Amortización
document.getElementById('formAmortizacion').addEventListener('submit', function(event) {
    event.preventDefault();
    const monto = parseFloat(document.getElementById('monto').value);
    const tasaInteres = parseFloat(document.getElementById('tasaInteres').value) / 100;
    const meses = parseInt(document.getElementById('meses').value);
    const cuerpoTabla = document.getElementById('tablaAmortizacion').querySelector('tbody');
    cuerpoTabla.innerHTML = '';
    calcularAmortizacion(monto, tasaInteres, meses, cuerpoTabla);
});

function calcularAmortizacion(monto, tasaInteres, meses, cuerpoTabla) {
    let saldo = monto;
    const abonoMensual = monto / meses;

    for (let periodo = 1; periodo <= meses; periodo++) {
        const interes = saldo * tasaInteres;
        const pago = abonoMensual + interes;

        const fila = document.createElement('tr');
        fila.innerHTML = `
            <td>${periodo}</td>
            <td>Q ${saldo.toFixed(2)}</td>
            <td>Q ${interes.toFixed(2)}</td>
            <td>Q ${abonoMensual.toFixed(2)}</td>
            <td>Q ${pago.toFixed(2)}</td>
        `;
        cuerpoTabla.appendChild(fila);

        saldo -= abonoMensual;
    }
}

// Potencia de Binomios
document.getElementById('formBinomio').addEventListener('submit', function(event) {
    event.preventDefault();
    const potencia = parseInt(document.getElementById('potenciaBinomio').value);
    const resultado = calcularBinomio(potencia);
    document.getElementById('resultadoBinomio').innerHTML = resultado;
});

function calcularBinomio(n) {
    const trianguloPascal = [[1]];
    for (let i = 1; i <= n; i++) {
        trianguloPascal[i] = [1];
        for (let j = 1; j < i; j++) {
            trianguloPascal[i][j] = trianguloPascal[i - 1][j - 1] + trianguloPascal[i - 1][j];
        }
        trianguloPascal[i].push(1);
    }

    let resultado = '';
    for (let k = 0; k <= n; k++) {
        resultado += `${trianguloPascal[n][k]}a<sup>${n - k}</sup>b<sup>${k}</sup>`;
        if (k < n) resultado += ' + ';
    }
    return resultado;
}
