function appendDesc(id, text, date, ap = 'beforeend') {
    let div = document.getElementById(id + '_ap');
    let DescI = id == 'education' ? educationDesc++ : trainingDesc++;
    div.insertAdjacentHTML(ap, `<tr class="py-3">
    <td>
      <input type="text" value="${text}" class="form-control form-control-alternative" name="${id}[${DescI}][desc]">
    </td>
    <td class="px-3">
      <input type="text" value="${date}" class="form-control form-control-alternative" name="${id}[${DescI}][date]">
    </td>
  </tr>`)
}

function addDesc(id) {
    let textInp = document.getElementById(id + '_inp')
    let dateInp = document.getElementById(id + '_date_inp')
    appendDesc(id, textInp.value, dateInp.value)
    textInp.value = ''
    dateInp.value = ''

}