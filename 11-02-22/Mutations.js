function mutation(arr) {
  let test1=arr[0].toLowerCase();
  let test2=arr[1].toLowerCase();
  for(let i=0;i<test2.length;i++){
    if(test1.indexOf(test2[i])<0){
      return false;
   }
}

  return true;
}

mutation(["hello", "Hello"]);
