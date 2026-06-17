const footerStyle = new CSSStyleSheet();
footerStyle.replaceSync(/*CSS*/`
footer {

    display: flex;
    align-items: center;
    background-color: #1C3657;
    height: 100px;
    width: 100%;
}

#footer-logo {
    margin-left: 20px;
    width: 90px;
    height: 90px;
}
`);

const template = document.createElement ('template')
template.innerHTML = /*HTML*/`
<footer>
    <img id="footer-logo" src="assets/images/549675846_18094174126680521_6691683239864828988_n.jpg" alt="">

    <div>

    </div>
</footer>`

class ComponentFooter extends HTMLElement {
    constructor() {
        super();
        const shadow = this.attachShadow({ mode: 'open' });

        shadow.adoptedStyleSheets = [footerStyle];

        shadow.appendChild(template.content.cloneNode(true));
    }
}

window.customElements.define('component-footer', ComponentFooter);