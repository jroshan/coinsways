using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace Coinsways.ViewModels
{
    public class ContactVM
    {
        [Required]
        [MaxLength(80)]
        public string Name { get; set; }
        [Required]
        [MaxLength(250)]
        [DataType(DataType.EmailAddress)]
        public string Email { get; set; }
        [MaxLength(1500)]
        public string Message { get; set; }
    }
}