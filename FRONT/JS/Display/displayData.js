export const displayData = (data, type) => {
    switch (type) {
        case 'h1':
            const h1 = document.createElement('h1');
            h1.textContent = data;
            document.body.appendChild(h1);
            break;
        case 'p':
            const p = document.createElement('p');
            p.textContent = data;
            document.body.appendChild(p);
            break;
        default:
            break;
    }
}