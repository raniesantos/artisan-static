import hljs from 'highlight.js/lib/core';

[
    'xml', 'css', 'scss', 'javascript', 'json',
    'php', 'php-template', 'apache', 'yaml',
    'markdown', 'handlebars', 'bash', 'shell',
].forEach((language) => {
    hljs.registerLanguage(language, require(`highlight.js/lib/languages/${language}`));
});

hljs.initHighlightingOnLoad();
