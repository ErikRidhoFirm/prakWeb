function calculate() {
    let inputs = [];
    $('input[name="input[]"]').each(function() {
        const value = $(this).val();
        if (value === "") {
            alert("Semua input wajib diisi.");
            return false;
        }
        inputs.push(Number(value));
    });

    if (inputs.length < 5) return;

    inputs.sort((a, b) => a - b);

    let smallestTwo = inputs.slice(0, 2);
    let largestTwo = inputs.slice(-2);

    let result = [...smallestTwo, ...largestTwo].sort((a, b) => a - b);

    $("#result").html(`
        <p>Nilai Terkecil: ${smallestTwo[0]}, ${smallestTwo[1]}</p>
        <p>Nilai Terbesar: ${largestTwo[0]}, ${largestTwo[1]}</p>
        <p>Urutan Terkecil ke Terbesar: ${result.join(", ")}</p>
    `);
}
