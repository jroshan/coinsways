//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated from a template.
//
//     Manual changes to this file may cause unexpected behavior in your application.
//     Manual changes to this file will be overwritten if the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace Coinsways.Entities
{
    using System;
    
    public partial class sp_get_user_tree_Result
    {
        public Nullable<long> UserId { get; set; }
        public string Name { get; set; }
        public string ParentUser { get; set; }
        public Nullable<System.DateTime> CreatedDate { get; set; }
        public Nullable<int> TreeLevel { get; set; }
    }
}