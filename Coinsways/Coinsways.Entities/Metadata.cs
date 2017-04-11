using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;

namespace Coinsways.Entities
{
    public class UserDetailMetadata
    {
        [Required]
        public string Name { get; set; }
        [Required]
        public decimal ContactNo { get; set; }
        [Required]
        [RegularExpression("^[a-zA-Z0-9_\\+-]+(\\.[a-zA-Z0-9_\\+-]+)*@[a-zA-Z0-9-]+(\\.[a-zA-Z0-9-]+)*\\.([a-zA-Z]{2,11})$", ErrorMessage= "Email address is not valid.")]

        public string Email { get; set; }
        [Required]
        public string Password { get; set; }
    }
}