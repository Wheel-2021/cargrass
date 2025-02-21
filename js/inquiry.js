'use strict';
{
  const columnTtl = document.querySelector('.inquiryTtl')
  const columnTxt = document.querySelector('.inquiryTxt')
  const flowItems = document.querySelectorAll('.flow__item')
  const formBoxes = document.querySelectorAll('.form__item')
  const btnConfirm = document.querySelector('.btn__confirm')
  const btnCorrect = document.querySelector('.btn__correct')
  const btnSend = document.querySelector('.btn__send')
  const requiredItems = document.querySelectorAll('.requirement__item')
  const optionSelect = document.querySelector('.form__option--select')
  const optionOutput = document.querySelector('.form__select--OutputTxt')
  const emailItem = document.querySelector('.form__email')

  const errorClassName = 'error'
  const fd = new FormData()
  let moveDir = ''

  // メールと電話の全角入力対策
  function replaceZtoH(str) {
    // 全角英文字を半角英文字に変換
    str = str.replace(/[Ａ-Ｚａ-ｚ]/g, s => String.fromCharCode(s.charCodeAt(0) - 0xFEE0));
    // 全角記号を半角記号に変換
    str = str.replace(/[！-～]/g, s => String.fromCharCode(s.charCodeAt(0) - 0xFEE0));
    return str;
  }

  emailItem.addEventListener('blur', () => {
    emailItem.value = replaceZtoH(emailItem.value)
  })


  const createText = (elem, message, type, tel) => {
    if (elem !== null) {
      const textSpan = document.createElement('span')
      if (type === 'text') {
        textSpan.classList.add(type)
        if (elem) {
          elem.style.display = 'none'
        }
      } else if (type === 'error') {
        textSpan.classList.add(errorClassName)
      }
      if (tel) {
        textSpan.classList.add('telError')
      }
      textSpan.setAttribute('aria-live', 'polite')
      textSpan.textContent = message
      elem.parentNode.appendChild(textSpan)
    }
  }

  function retrunTtl(type, word) {
    switch (word) {
      case 'contact':
        columnTtl.textContent = 'お問い合わせ'
        columnTxt.innerHTML = 'お問い合わせ、ありがとうございます。以下のフォームをご記入の上、「入力内容の確認」ボタンを押してください。その後、確認画面に遷移します。内容をご確認の上、送信してください。※念のため、IPアドレスを記録しています。'
        break;
      case 'confirm':
        columnTtl.textContent = 'お問い合わせ内容'
        columnTxt.innerHTML = '送信する前にお問い合わせ内容を確認願います。よろしければ「送信」ボタンを押してください。この画面では文字を修正することができません。「内容の修正」ボタンを押して、記入画面に戻ってください。'
        break;
      case 'thanks':
        columnTtl.textContent = 'お問い合わせ内容送信完了'
        columnTxt.innerHTML = 'お問い合わせ、ありがとうございました。。'
        break;
    }
  }

  function flowDisplay(number) {
    flowItems.forEach((item, index) => {
      item.classList.remove('is__active')
      if (index === number) {
        item.classList.add('is__active')
      }
    })
  }

  function moveForm(formName) {
    const columnTtl = document.querySelector('.inquiryTtl')
    const frontPageHeight = document
      .querySelector('.topPage__wrap')
      .getBoundingClientRect().height
    const inquiryHeight = document
      .querySelector('#inquiry-public')
      .getBoundingClientRect().height
    const inquiryPosition = frontPageHeight - inquiryHeight
    const columnTtlOffsetTop = columnTtl.offsetTop

    let offsetAdjustment
    if (window.innerWidth < 768) {
      offsetAdjustment = 100
    } else {

      offsetAdjustment = 300
    }

    window.scrollTo({
      top: inquiryPosition + columnTtlOffsetTop + offsetAdjustment,
      behavior: 'smooth',
    })

    setTimeout(scrollEnd(formName), 3000)
  }

  function scrollEnd(formName) {
    if (formName === 'confirm') {
      moveDir = '-110%'
    } else if (formName === 'input') {
      moveDir = '0%'
    } else {
      moveDir = '-220%'
    }
    formBoxes.forEach((formBox) => {
      let anime
      anime = gsap.to(formBox, {
        x: moveDir,
        delay: 1,
        duration: 0.6,
        ease: 'power2.inOut',
        onComplete: () => {
          anime.kill()
        },
      })
    })
  }

  btnConfirm.addEventListener('click', (e) => {
    // エラーがあった場合の処理
    let errors = document.querySelectorAll('.error')
    if (errors.length !== 0) {
      for (let error of errors) {
        error.remove()
      }
    }

    requiredItems.forEach((item) => {
      const itemVal = item.value?.trim()
      if (itemVal?.length === 0) {
        createText(item, '入力が必須です', 'error')
        e.preventDefault()
      }
    })

    const email = emailItem
    const emailPattern = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ui
    if (email.value.trim() !== '') {
      if (!emailPattern.test(email.value)) {
        createText(email, 'Emailアドレスの形式が正しくないようです。', 'error')
        e.preventDefault()
      }
    }

    const frontPageHeight = document
      .querySelector('.topPage__wrap')
      .getBoundingClientRect().height
    const inquiryHeight = document
      .querySelector('#inquiry-public')
      .getBoundingClientRect().height
    const errorElem = document.querySelector('.' + errorClassName)
    const inquiryPosition = frontPageHeight - inquiryHeight


    if (errorElem) {
      const errorElemOffsetTop = errorElem.offsetTop

      window.scrollTo({
        top: inquiryPosition + errorElemOffsetTop,
        behavior: 'smooth',
      })
    }

    //問題なければ遷移
    errors = document.querySelectorAll('.error')
    const text = document.querySelectorAll('.form__input--txt')
    const optionTxt = optionSelect.options[optionSelect.selectedIndex].value

    if (errors.length === 0) {
      // フロー表示変更
      flowDisplay(1)
      // 文字置き換え
      retrunTtl(btnConfirm.name, 'confirm')
      // 値格納
      requiredItems.forEach((item, index) => {
        const itemVal = item.value?.trim()
        if (itemVal?.length !== 0) {
            text[index].innerText = itemVal
         }
      })

      if (optionTxt) {
        optionOutput.innerText = optionTxt
      } else {
        optionOutput.innerHTML = '&nbsp;'
      }
      // フォーム遷移
      moveForm('confirm')
    }
  })

  btnCorrect.addEventListener('click', (e) => {
    // フロー表示変更
    flowDisplay(0)
    // 文字置き換え
    retrunTtl(btnConfirm.name, 'contact')
    // フォーム遷移
    moveForm('input')
  })

  btnSend.addEventListener('click', (e) => {
    // フロー表示変更
    flowDisplay(2)
    // 文字置き換え
    retrunTtl(btnConfirm.name, 'thanks')
    // フォーム遷移
    moveForm('thanks')

    requiredItems.forEach((item) => {
      fd.append(item.name, item.value)
    })


    const optionTxt = optionSelect.options[optionSelect.selectedIndex].value
    console.log(optionTxt)
    if (optionTxt) {
      fd.append('genre', optionTxt)
    }

    fd.append('action', 'mail_inquiry')

    fetch('/wp-admin/admin-ajax.php', {
      method: 'POST',
      mode: 'cors',
      body: fd
    })
      .then((response) => {
        if (response.ok) {
          return response.text()
        } else {
          throw new Error(response.statusText)
        }
      })
      .then(result => console.log(result))
      .catch((error) => {
        console.error(error)
      })
  }, { once: true })
}
