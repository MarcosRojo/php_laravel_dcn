
const parseErrors = (objet) =>{
    const mensaje = [];
    for(const element in objet){
        mensaje.push(`- ${element}: ${objet[element][0]}`)
        mensaje.push('\n')
    }
    return mensaje.join(' ')

}

export default parseErrors;
