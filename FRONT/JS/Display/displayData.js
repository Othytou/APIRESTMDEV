export const displayData = (data: string, type: string) : void => {
    switch (type) {
        case 'h1':
            const h1 : HTMLHeadingElement = document.createElement('h1');
            h1.textContent = data;
            document.body.appendChild(h1);
            break;
        case 'p':
            const p : HTMLParagraphElement = document.createElement('p');
            p.textContent = data;
            document.body.appendChild(p);
            break;
        default:
            break;
    }
}