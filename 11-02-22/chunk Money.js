function chunkArrayInGroups(arr, size) {
  let chunk=[];
  //with splice
  while(arr.length > 0){
    chunk.push(arr.splice(0,size));
  } 
  console.log(chunk)
  return chunk
 }
//without splice
//   for(let i=0;i<arr.length;i++){
//     if(chunk.length != size && i<arr.length-1){
//       chunk.push(arr[i])
//       //console.log(1)
//     }
//     else if(chunk.length <size && i==arr.length-1){
//       if(chunk.length==size){
//         arr1.push(chunk);
//         chunk=[];
//         chunk.push(arr[i])
//         arr1.push(chunk)
//         //console.log(3)
//       }
//       chunk.push(arr[i])
//       arr1.push(chunk)
      
//      }
//      else if(chunk.length==size){
//        arr1.push(chunk);
//        chunk=[];
//        chunk.push(arr[i])
       
//      }
//   }
//   console.log(arr1)
//   return arr1;


chunkArrayInGroups([0, 1, 2, 3, 4, 5], 4);
