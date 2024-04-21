add = () => {
  const op = document.querySelector(".add");
  const ichi = parseFloat(op.querySelector(".form-control.w-25.firstNumber").value);
  const ni = parseFloat(op.querySelector(".form-control.w-25.secondNumber").value);
  op.querySelector(".result-add").innerHTML = ichi + ni;
};

sub = () => {
  const op = document.querySelector(".sub");
  const ichi = parseFloat(op.querySelector(".form-control.w-25.firstNumber").value);
  const ni = parseFloat(op.querySelector(".form-control.w-25.secondNumber").value);
  op.querySelector(".result-sub").innerHTML = ichi - ni;
};

mul = () => {
  const op = document.querySelector(".multiply");
  const ichi = parseFloat(op.querySelector(".form-control.w-25.firstNumber").value);
  const ni = parseFloat(op.querySelector(".form-control.w-25.secondNumber").value);
  op.querySelector(".result-mul").innerHTML = ichi * ni;
};

div = () => {
  const op = document.querySelector(".division");
  const ichi = parseFloat(op.querySelector(".form-control.w-25.firstNumber").value);
  const ni = parseFloat(op.querySelector(".form-control.w-25.secondNumber").value);
  op.querySelector(".result-div").innerHTML = ichi / ni;
};

pow = () => {
  const op = document.querySelector(".pow");
  const ichi = parseFloat(op.querySelector(".form-control.w-25.firstNumber").value);
  const ni = parseFloat(op.querySelector(".form-control.w-25.secondNumber").value);
  op.querySelector(".result-pow").innerHTML = Math.pow(ichi, ni);
};
